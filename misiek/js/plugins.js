(function($){

})(window.jQuery);

jQuery.fn.margin = function() {
    var marginTop = this.outerHeight(true) - this.outerHeight();
    var marginLeft = this.outerWidth(true) - this.outerWidth();

    return {
        top: marginTop,
        left: marginLeft
    }
};

window.log = function() {
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if (this.console) {
    console.log(Array.prototype.slice.call(arguments));
  }
};

(function(doc) {
  var write = doc.write;
  doc.write = function(q) { 
    log('document.write(): ',arguments); 
    if (/docwriteregexwhitelist/.test(q)) write.apply(doc,arguments);  
  };
})(document);
