jQuery.fn.highlight = function(pat) {
 function innerHighlight(node, pat) {
  var skip = 0;
  if (node.nodeType == 3) {
   var pos = node.data.toUpperCase().indexOf(pat);
   pos -= (node.data.substr(0, pos).toUpperCase().length - node.data.substr(0, pos).length);
   if (pos >= 0) {
    var spannode = document.createElement('span');
    spannode.className = 'highlight';
    var middlebit = node.splitText(pos);
    var endbit = middlebit.splitText(pat.length);
    var middleclone = middlebit.cloneNode(true);
    spannode.appendChild(middleclone);
    middlebit.parentNode.replaceChild(spannode, middlebit);
    skip = 1;
   }
  }
  else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
   for (var i = 0; i < node.childNodes.length; ++i) {
    i += innerHighlight(node.childNodes[i], pat);
   }
  }
  return skip;
 }
 return this.length && pat && pat.length ? this.each(function() {
  innerHighlight(this, pat.toUpperCase());
 }) : this;
};

jQuery.fn.removeHighlight = function() {
 return this.find("span.highlight").each(function() {
  this.parentNode.firstChild.nodeName;
  with (this.parentNode) {
   replaceChild(this.firstChild, this);
   normalize();
  }
 }).end();
};

jQuery(function(){
    jQuery('.green-nav').data('size','big');
});

jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 500)
    {
        if(jQuery('.green-nav').data('size') == 'big')
        {
            jQuery('.green-nav').data('size','small');
            jQuery('.green-nav').addClass('navbar-fixed-top');
			jQuery('.green-nav').animate({top: '60px'}, 300)
			
        }
    }
    else
    {
        if(jQuery('.green-nav').data('size') == 'small')
        {
            jQuery('.green-nav').data('size','big');
            jQuery('.green-nav').removeClass('navbar-fixed-top');
			jQuery('.green-nav').animate({top: '0'}, 300)
			
        }  
    }
});

jQuery(document).ready(function($) {
	$('.prevenir img').hover(function() {
		$(this).animate({marginTop: '-3px', marginBottom: '3px'}, 300)
	}, function() {
		$(this).animate({marginTop: '0px', marginBottom: '0px'}, 300)	
	});
});


jQuery(document).ready(function($) {
	$('.reasons img').hover(function() {
		$(this).animate({marginTop: '-3px', marginBottom: '3px'}, 300)
	}, function() {
		$(this).animate({marginTop: '0px', marginBottom: '0px'}, 300)	
	});
});

jQuery(document).ready(function($) {
	$('.clinic img').hover(function() {
		$(this).animate({marginTop: '-2px', marginBottom: '2px'}, 300)
	}, function() {
		$(this).animate({marginTop: '0px', marginBottom: '0px'}, 300)	
	});
});

jQuery(document).ready(function($) {
	$('.clicnics img').hover(function() {
		$(this).animate({opacity: .7}, 300)
	}, function() {
		$(this).animate({opacity: 1}, 300)	
	});
});