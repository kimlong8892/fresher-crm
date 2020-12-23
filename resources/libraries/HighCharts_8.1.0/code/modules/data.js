/*
 Highcharts JS v8.1.0 (2020-05-05)

 Data module

 (c) 2012-2019 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(c){"object"===typeof module&&module.exports?(c["default"]=c,module.exports=c):"function"===typeof define&&define.amd?define("highcharts/modules/data",["highcharts"],function(t){c(t);c.Highcharts=t;return c}):c("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(c){function t(c,l,u,t){c.hasOwnProperty(l)||(c[l]=t.apply(null,u))}c=c?c._modules:{};t(c,"mixins/ajax.js",[c["parts/Globals.js"],c["parts/Utilities.js"]],function(c,l){var u=l.merge,t=l.objectEach;c.ajax=function(c){var h=
u(!0,{url:!1,type:"get",dataType:"json",success:!1,error:!1,data:!1,headers:{}},c);c={json:"application/json",xml:"application/xml",text:"text/plain",octet:"application/octet-stream"};var l=new XMLHttpRequest;if(!h.url)return!1;l.open(h.type.toUpperCase(),h.url,!0);h.headers["Content-Type"]||l.setRequestHeader("Content-Type",c[h.dataType]||c.text);t(h.headers,function(c,h){l.setRequestHeader(h,c)});l.onreadystatechange=function(){if(4===l.readyState){if(200===l.status){var c=l.responseText;if("json"===
h.dataType)try{c=JSON.parse(c)}catch(z){h.error&&h.error(l,z);return}return h.success&&h.success(c)}h.error&&h.error(l,l.responseText)}};try{h.data=JSON.stringify(h.data)}catch(C){}l.send(h.data||!0)};c.getJSON=function(l,h){c.ajax({url:l,success:h,dataType:"json",headers:{"Content-Type":"text/plain"}})}});t(c,"modules/data.src.js",[c["parts/Globals.js"],c["parts/Utilities.js"],c["parts/Globals.js"],c["parts/Point.js"]],function(c,l,u,t){var E=l.addEvent,h=l.defined,F=l.extend,C=l.fireEvent,z=l.isNumber,
A=l.merge,G=l.objectEach,H=l.pick,I=l.splat;l=u.Chart;var J=u.win.document,K=function(){function f(a,b,e){this.options=this.rawColumns=this.firstRowAsNames=this.chartOptions=this.chart=void 0;this.dateFormats={"YYYY/mm/dd":{regex:/^([0-9]{4})[\-\/\.]([0-9]{1,2})[\-\/\.]([0-9]{1,2})$/,parser:function(a){return a?Date.UTC(+a[1],a[2]-1,+a[3]):NaN}},"dd/mm/YYYY":{regex:/^([0-9]{1,2})[\-\/\.]([0-9]{1,2})[\-\/\.]([0-9]{4})$/,parser:function(a){return a?Date.UTC(+a[3],a[2]-1,+a[1]):NaN},alternative:"mm/dd/YYYY"},
"mm/dd/YYYY":{regex:/^([0-9]{1,2})[\-\/\.]([0-9]{1,2})[\-\/\.]([0-9]{4})$/,parser:function(a){return a?Date.UTC(+a[3],a[1]-1,+a[2]):NaN}},"dd/mm/YY":{regex:/^([0-9]{1,2})[\-\/\.]([0-9]{1,2})[\-\/\.]([0-9]{2})$/,parser:function(a){if(!a)return NaN;var b=+a[3];b=b>(new Date).getFullYear()-2E3?b+1900:b+2E3;return Date.UTC(b,a[2]-1,+a[1])},alternative:"mm/dd/YY"},"mm/dd/YY":{regex:/^([0-9]{1,2})[\-\/\.]([0-9]{1,2})[\-\/\.]([0-9]{2})$/,parser:function(a){return a?Date.UTC(+a[3]+2E3,a[1]-1,+a[2]):NaN}}};
this.init(a,b,e)}f.prototype.init=function(a,b,e){var d=a.decimalPoint;b&&(this.chartOptions=b);e&&(this.chart=e);"."!==d&&","!==d&&(d=void 0);this.options=a;this.columns=a.columns||this.rowsToColumns(a.rows)||[];this.firstRowAsNames=H(a.firstRowAsNames,this.firstRowAsNames,!0);this.decimalRegex=d&&new RegExp("^(-?[0-9]+)"+d+"([0-9]+)$");this.rawColumns=[];if(this.columns.length){this.dataFound();var g=!0}this.hasURLOption(a)&&(clearTimeout(this.liveDataTimeout),g=!1);g||(g=this.fetchLiveData());
g||(g=!!this.parseCSV().length);g||(g=!!this.parseTable().length);g||(g=this.parseGoogleSpreadsheet());!g&&a.afterComplete&&a.afterComplete()};f.prototype.hasURLOption=function(a){return!(!a||!(a.rowsURL||a.csvURL||a.columnsURL))};f.prototype.getColumnDistribution=function(){var a=this.chartOptions,b=this.options,e=[],d=function(a){return(u.seriesTypes[a||"line"].prototype.pointArrayMap||[0]).length},g=a&&a.chart&&a.chart.type,m=[],c=[],k=0;b=b&&b.seriesMapping||a&&a.series&&a.series.map(function(){return{x:0}})||
[];var p;(a&&a.series||[]).forEach(function(a){m.push(d(a.type||g))});b.forEach(function(a){e.push(a.x||0)});0===e.length&&e.push(0);b.forEach(function(b){var e=new D,y=m[k]||d(g),q=(a&&a.series||[])[k]||{},f=u.seriesTypes[q.type||g||"line"].prototype.pointArrayMap,l=f||["y"];(h(b.x)||q.isCartesian||!f)&&e.addColumnReader(b.x,"x");G(b,function(a,b){"x"!==b&&e.addColumnReader(a,b)});for(p=0;p<y;p++)e.hasReader(l[p])||e.addColumnReader(void 0,l[p]);c.push(e);k++});b=u.seriesTypes[g||"line"].prototype.pointArrayMap;
"undefined"===typeof b&&(b=["y"]);this.valueCount={global:d(g),xColumns:e,individual:m,seriesBuilders:c,globalPointArrayMap:b}};f.prototype.dataFound=function(){this.options.switchRowsAndColumns&&(this.columns=this.rowsToColumns(this.columns));this.getColumnDistribution();this.parseTypes();!1!==this.parsed()&&this.complete()};f.prototype.parseCSV=function(a){function b(a,b,e,d){function g(b){f=a[b];r=a[b-1];q=a[b+1]}function m(a){w.length<v+1&&w.push([a]);w[v][w[v].length-1]!==a&&w[v].push(a)}function c(){p>
B||B>l?(++B,k=""):(!isNaN(parseFloat(k))&&isFinite(k)?(k=parseFloat(k),m("number")):isNaN(Date.parse(k))?m("string"):(k=k.replace(/\//g,"-"),m("date")),h.length<v+1&&h.push([]),e||(h[v][b]=k),k="",++v,++B)}var n=0,f="",r="",q="",k="",B=0,v=0;if(a.trim().length&&"#"!==a.trim()[0]){for(;n<a.length;n++){g(n);if("#"===f){c();return}if('"'===f)for(g(++n);n<a.length&&('"'!==f||'"'===r||'"'===q);){if('"'!==f||'"'===f&&'"'!==r)k+=f;g(++n)}else d&&d[f]?d[f](f,k)&&c():f===x?c():k+=f}c()}}function e(a){var b=
0,e=0,d=!1;a.some(function(a,d){var g=!1,m="";if(13<d)return!0;for(var c=0;c<a.length;c++){d=a[c];var f=a[c+1];var k=a[c-1];if("#"===d)break;if('"'===d)if(g){if('"'!==k&&'"'!==f){for(;" "===f&&c<a.length;)f=a[++c];"undefined"!==typeof q[f]&&q[f]++;g=!1}}else g=!0;else"undefined"!==typeof q[d]?(m=m.trim(),isNaN(Date.parse(m))?!isNaN(m)&&isFinite(m)||q[d]++:q[d]++,m=""):m+=d;","===d&&e++;"."===d&&b++}});d=q[";"]>q[","]?";":",";m.decimalPoint||(m.decimalPoint=b>e?".":",",g.decimalRegex=new RegExp("^(-?[0-9]+)"+
m.decimalPoint+"([0-9]+)$"));return d}function d(a,b){var d=[],e=0,c=!1,f=[],k=[],n;if(!b||b>a.length)b=a.length;for(;e<b;e++)if("undefined"!==typeof a[e]&&a[e]&&a[e].length){var p=a[e].trim().replace(/\//g," ").replace(/\-/g," ").replace(/\./g," ").split(" ");d=["","",""];for(n=0;n<p.length;n++)n<d.length&&(p[n]=parseInt(p[n],10),p[n]&&(k[n]=!k[n]||k[n]<p[n]?p[n]:k[n],"undefined"!==typeof f[n]?f[n]!==p[n]&&(f[n]=!1):f[n]=p[n],31<p[n]?d[n]=100>p[n]?"YY":"YYYY":12<p[n]&&31>=p[n]?(d[n]="dd",c=!0):d[n].length||
(d[n]="mm")))}if(c){for(n=0;n<f.length;n++)!1!==f[n]?12<k[n]&&"YY"!==d[n]&&"YYYY"!==d[n]&&(d[n]="YY"):12<k[n]&&"mm"===d[n]&&(d[n]="dd");3===d.length&&"dd"===d[1]&&"dd"===d[2]&&(d[2]="YY");a=d.join("/");return(m.dateFormats||g.dateFormats)[a]?a:(C("deduceDateFailed"),"YYYY/mm/dd")}return"YYYY/mm/dd"}var g=this,m=a||this.options,c=m.csv;a="undefined"!==typeof m.startRow&&m.startRow?m.startRow:0;var f=m.endRow||Number.MAX_VALUE,p="undefined"!==typeof m.startColumn&&m.startColumn?m.startColumn:0,l=m.endColumn||
Number.MAX_VALUE,r=0,w=[],q={",":0,";":0,"\t":0};var h=this.columns=[];c&&m.beforeParse&&(c=m.beforeParse.call(this,c));if(c){c=c.replace(/\r\n/g,"\n").replace(/\r/g,"\n").split(m.lineDelimiter||"\n");if(!a||0>a)a=0;if(!f||f>=c.length)f=c.length-1;if(m.itemDelimiter)var x=m.itemDelimiter;else x=null,x=e(c);var v=0;for(r=a;r<=f;r++)"#"===c[r][0]?v++:b(c[r],r-a-v);m.columnTypes&&0!==m.columnTypes.length||!w.length||!w[0].length||"date"!==w[0][1]||m.dateFormat||(m.dateFormat=d(h[0]));this.dataFound()}return h};
f.prototype.parseTable=function(){var a=this.options,b=a.table,e=this.columns||[],d=a.startRow||0,g=a.endRow||Number.MAX_VALUE,m=a.startColumn||0,c=a.endColumn||Number.MAX_VALUE;b&&("string"===typeof b&&(b=J.getElementById(b)),[].forEach.call(b.getElementsByTagName("tr"),function(a,b){b>=d&&b<=g&&[].forEach.call(a.children,function(a,g){var f=e[g-m],k=1;if(("TD"===a.tagName||"TH"===a.tagName)&&g>=m&&g<=c)for(e[g-m]||(e[g-m]=[]),e[g-m][b-d]=a.innerHTML;b-d>=k&&void 0===f[b-d-k];)f[b-d-k]=null,k++})}),
this.dataFound());return e};f.prototype.fetchLiveData=function(){function a(p){function l(k,l,q){function h(){m&&e.liveDataURL===k&&(b.liveDataTimeout=setTimeout(a,f))}if(!k||0!==k.indexOf("http"))return k&&d.error&&d.error("Invalid URL"),!1;p&&(clearTimeout(b.liveDataTimeout),e.liveDataURL=k);c.ajax({url:k,dataType:q||"json",success:function(a){e&&e.series&&l(a);h()},error:function(a,b){3>++g&&h();return d.error&&d.error(b,a)}});return!0}l(k.csvURL,function(a){e.update({data:{csv:a}})},"text")||
l(k.rowsURL,function(a){e.update({data:{rows:a}})})||l(k.columnsURL,function(a){e.update({data:{columns:a}})})}var b=this,e=this.chart,d=this.options,g=0,m=d.enablePolling,f=1E3*(d.dataRefreshRate||2),k=A(d);if(!this.hasURLOption(d))return!1;1E3>f&&(f=1E3);delete d.csvURL;delete d.rowsURL;delete d.columnsURL;a(!0);return this.hasURLOption(d)};f.prototype.parseGoogleSpreadsheet=function(){function a(b){var g=["https://spreadsheets.google.com/feeds/cells",d,m,"public/values?alt=json"].join("/");c.ajax({url:g,
dataType:"json",success:function(d){b(d);e.enablePolling&&setTimeout(function(){a(b)},1E3*(e.dataRefreshRate||2))},error:function(a,b){return e.error&&e.error(b,a)}})}var b=this,e=this.options,d=e.googleSpreadsheetKey,g=this.chart,m=e.googleSpreadsheetWorksheet||1,f=e.startRow||0,k=e.endRow||Number.MAX_VALUE,p=e.startColumn||0,l=e.endColumn||Number.MAX_VALUE,h=1E3*(e.dataRefreshRate||2);4E3>h&&(h=4E3);d&&(delete e.googleSpreadsheetKey,a(function(a){var d=[];a=a.feed.entry;var e=(a||[]).length,m=0,
c;if(!a||0===a.length)return!1;for(c=0;c<e;c++){var h=a[c];m=Math.max(m,h.gs$cell.col)}for(c=0;c<m;c++)c>=p&&c<=l&&(d[c-p]=[]);for(c=0;c<e;c++){h=a[c];m=h.gs$cell.row-1;var y=h.gs$cell.col-1;if(y>=p&&y<=l&&m>=f&&m<=k){var r=h.gs$cell||h.content;h=null;r.numericValue?h=0<=r.$t.indexOf("/")||0<=r.$t.indexOf("-")?r.$t:0<r.$t.indexOf("%")?100*parseFloat(r.numericValue):parseFloat(r.numericValue):r.$t&&r.$t.length&&(h=r.$t);d[y-p][m-f]=h}}d.forEach(function(a){for(c=0;c<a.length;c++)"undefined"===typeof a[c]&&
(a[c]=null)});g&&g.series?g.update({data:{columns:d}}):(b.columns=d,b.dataFound())}));return!1};f.prototype.trim=function(a,b){"string"===typeof a&&(a=a.replace(/^\s+|\s+$/g,""),b&&/^[0-9\s]+$/.test(a)&&(a=a.replace(/\s/g,"")),this.decimalRegex&&(a=a.replace(this.decimalRegex,"$1.$2")));return a};f.prototype.parseTypes=function(){for(var a=this.columns,b=a.length;b--;)this.parseColumn(a[b],b)};f.prototype.parseColumn=function(a,b){var e=this.rawColumns,d=this.columns,g=a.length,c=this.firstRowAsNames,
f=-1!==this.valueCount.xColumns.indexOf(b),k,p=[],l=this.chartOptions,h,u=(this.options.columnTypes||[])[b];l=f&&(l&&l.xAxis&&"category"===I(l.xAxis)[0].type||"string"===u);for(e[b]||(e[b]=[]);g--;){var q=p[g]||a[g];var t=this.trim(q);var x=this.trim(q,!0);var v=parseFloat(x);"undefined"===typeof e[b][g]&&(e[b][g]=t);l||0===g&&c?a[g]=""+t:+x===v?(a[g]=v,31536E6<v&&"float"!==u?a.isDatetime=!0:a.isNumeric=!0,"undefined"!==typeof a[g+1]&&(h=v>a[g+1])):(t&&t.length&&(k=this.parseDate(q)),f&&z(k)&&"float"!==
u?(p[g]=q,a[g]=k,a.isDatetime=!0,"undefined"!==typeof a[g+1]&&(q=k>a[g+1],q!==h&&"undefined"!==typeof h&&(this.alternativeFormat?(this.dateFormat=this.alternativeFormat,g=a.length,this.alternativeFormat=this.dateFormats[this.dateFormat].alternative):a.unsorted=!0),h=q)):(a[g]=""===t?null:t,0!==g&&(a.isDatetime||a.isNumeric)&&(a.mixed=!0)))}f&&a.mixed&&(d[b]=e[b]);if(f&&h&&this.options.sort)for(b=0;b<d.length;b++)d[b].reverse(),c&&d[b].unshift(d[b].pop())};f.prototype.parseDate=function(a){var b=this.options.parseDate,
e,d=this.options.dateFormat||this.dateFormat,g;if(b)var c=b(a);else if("string"===typeof a){if(d)(b=this.dateFormats[d])||(b=this.dateFormats["YYYY/mm/dd"]),(g=a.match(b.regex))&&(c=b.parser(g));else for(e in this.dateFormats)if(b=this.dateFormats[e],g=a.match(b.regex)){this.dateFormat=e;this.alternativeFormat=b.alternative;c=b.parser(g);break}g||(g=Date.parse(a),"object"===typeof g&&null!==g&&g.getTime?c=g.getTime()-6E4*g.getTimezoneOffset():z(g)&&(c=g-6E4*(new Date(g)).getTimezoneOffset()))}return c};
f.prototype.rowsToColumns=function(a){var b,e;if(a){var d=[];var c=a.length;for(b=0;b<c;b++){var f=a[b].length;for(e=0;e<f;e++)d[e]||(d[e]=[]),d[e][b]=a[b][e]}}return d};f.prototype.getData=function(){if(this.columns)return this.rowsToColumns(this.columns).slice(1)};f.prototype.parsed=function(){if(this.options.parsed)return this.options.parsed.call(this,this.columns)};f.prototype.getFreeIndexes=function(a,b){var e,d=[],c=[];for(e=0;e<a;e+=1)d.push(!0);for(a=0;a<b.length;a+=1){var f=b[a].getReferencedColumnIndexes();
for(e=0;e<f.length;e+=1)d[f[e]]=!1}for(e=0;e<d.length;e+=1)d[e]&&c.push(e);return c};f.prototype.complete=function(){var a=this.columns,b,e=this.options,d,c,f=[];if(e.complete||e.afterComplete){if(this.firstRowAsNames)for(d=0;d<a.length;d++)a[d].name=a[d].shift();var l=[];var k=this.getFreeIndexes(a.length,this.valueCount.seriesBuilders);for(d=0;d<this.valueCount.seriesBuilders.length;d++){var h=this.valueCount.seriesBuilders[d];h.populateColumns(k)&&f.push(h)}for(;0<k.length;){h=new D;h.addColumnReader(0,
"x");d=k.indexOf(0);-1!==d&&k.splice(d,1);for(d=0;d<this.valueCount.global;d++)h.addColumnReader(void 0,this.valueCount.globalPointArrayMap[d]);h.populateColumns(k)&&f.push(h)}0<f.length&&0<f[0].readers.length&&(h=a[f[0].readers[0].columnIndex],"undefined"!==typeof h&&(h.isDatetime?b="datetime":h.isNumeric||(b="category")));if("category"===b)for(d=0;d<f.length;d++)for(h=f[d],k=0;k<h.readers.length;k++)"x"===h.readers[k].configName&&(h.readers[k].configName="name");for(d=0;d<f.length;d++){h=f[d];k=
[];for(c=0;c<a[0].length;c++)k[c]=h.read(a,c);l[d]={data:k};h.name&&(l[d].name=h.name);"category"===b&&(l[d].turboThreshold=0)}a={series:l};b&&(a.xAxis={type:b},"category"===b&&(a.xAxis.uniqueNames=!1));e.complete&&e.complete(a);e.afterComplete&&e.afterComplete(a)}};f.prototype.update=function(a,b){var e=this.chart;a&&(a.afterComplete=function(a){a&&(a.xAxis&&e.xAxis[0]&&a.xAxis.type===e.xAxis[0].options.type&&delete a.xAxis,e.update(a,b,!0))},A(!0,e.options.data,a),this.init(e.options.data))};return f}();
u.data=function(c,a,b){return new u.Data(c,a,b)};E(l,"init",function(c){var a=this,b=c.args[0]||{},e=c.args[1];b&&b.data&&!a.hasDataDef&&(a.hasDataDef=!0,a.data=new u.Data(F(b.data,{afterComplete:function(d){var c;if(Object.hasOwnProperty.call(b,"series"))if("object"===typeof b.series)for(c=Math.max(b.series.length,d&&d.series?d.series.length:0);c--;){var f=b.series[c]||{};b.series[c]=A(f,d&&d.series?d.series[c]:{})}else delete b.series;b=A(d,b);a.init(b,e)}}),b,a),c.preventDefault())});var D=function(){function c(){this.readers=
[];this.pointIsArray=!0;this.name=void 0}c.prototype.populateColumns=function(a){var b=!0;this.readers.forEach(function(b){"undefined"===typeof b.columnIndex&&(b.columnIndex=a.shift())});this.readers.forEach(function(a){"undefined"===typeof a.columnIndex&&(b=!1)});return b};c.prototype.read=function(a,b){var c=this.pointIsArray,d=c?[]:{};this.readers.forEach(function(e){var f=a[e.columnIndex][b];c?d.push(f):0<e.configName.indexOf(".")?t.prototype.setNestedProperty(d,f,e.configName):d[e.configName]=
f});if("undefined"===typeof this.name&&2<=this.readers.length){var f=this.getReferencedColumnIndexes();2<=f.length&&(f.shift(),f.sort(function(a,b){return a-b}),this.name=a[f.shift()].name)}return d};c.prototype.addColumnReader=function(a,b){this.readers.push({columnIndex:a,configName:b});"x"!==b&&"y"!==b&&"undefined"!==typeof b&&(this.pointIsArray=!1)};c.prototype.getReferencedColumnIndexes=function(){var a,b=[];for(a=0;a<this.readers.length;a+=1){var c=this.readers[a];"undefined"!==typeof c.columnIndex&&
b.push(c.columnIndex)}return b};c.prototype.hasReader=function(a){var b;for(b=0;b<this.readers.length;b+=1){var c=this.readers[b];if(c.configName===a)return!0}};return c}();u.Data=K;return u.Data});t(c,"masters/modules/data.src.js",[],function(){})});
//# sourceMappingURL=data.js.map