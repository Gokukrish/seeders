var sccc = ""; var scheight = ""; var scwidth = ""; 
var filePath="https://atoall.com/all/all.asp?wcc=&webtooldevelopmentatoall="+escape(location.hostname)+"&dmnpath="+escape(location.href)+"&t=1002";
var iframe='<iframe id="frame" title="Accessibility Web Tool Will Make You More Accessible for users with disabilities" name="widget" src ="#" width="100%" height="0" marginheight="0" marginwidth="0" scrolling="no" frameborder="0"></iframe>';
document.write(iframe);

var myIframe=parent.document.getElementById("frame");myIframe.src=filePath;myIframe.width="0px";myIframe.height="0px";myIframe.style.border="0px solid #999";myIframe.style.padding="0px";
