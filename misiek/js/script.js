$(document).ready(function() {
    if (!location.hash)
        location.hash = '#illustration/01';
    Application.load();
    $(window).resize();
    Lib.hideLoading();
    $(window).hashchange();
});
var Application = {
    pages : null,
    resize: function() {
        var winHeight = window.innerHeight ? window.innerHeight : $(window).height();
        $('article, nav').css('height', winHeight);
        $('article').css('width', $(window).width() - 241);
    },
    load : function() {
        this.pages = pages;
        this.createMenuDOM();
        this.bindHashChangeEvent();
        this.bindClickMenuEvent();
        $(window).resize(this.resize);
    },
    createMenuDOM: function() {
        $.each(this.pages, function(index, page) {
            var $page = $('<li><a href="#' + page.name + '" class="link ' + page.name + '"></a><div class="clearfix"/></li>');
            if (page.name == 'blog') {
               $page = $('<li><a href="http://michaldziekan.blogspot.com" target="_blank" class="link ' + page.name + '"></a></li>'); 
            }
            $page.data('page', page);
            $('nav ul').append($page);
        });
    },
    bindClickMenuEvent: function() {
        $('nav .link').click(function(e) {
            if ($(this).is(".blog"))
                return;
            if ($(this).is('.characters'))
                return;
            e.preventDefault();
            var href = $(this).attr('href');
            if (href.indexOf('#') >= 0)
                href = href.substring(href.indexOf('#') + 1);
            Application.toggleMenuCategory(href);
            return false;
        });
    },
    goto: function(place) {
        Application.clearNavigationArrows();
        $("article > div").hide();
        $("nav .link").removeClass('selected');
        $("nav .images .selected").removeClass('selected').hover();
        if (!place) {
            Application.hideMenuCategories();
            $(".hello").show();
        }
        else {
            var hashParts = place.split('/');
            var pageName = hashParts[0];
            var pictureName = hashParts.length > 1 ? hashParts[1] : Application.firstPicture(pageName);
            var $link = $("nav .link." + pageName);
            var $page = $link.parent();
            var page = $page.data('page');
            if (page.posts) {
                var callback = null;
                if (pictureName) {
                    callback = function() {
                        $('nav ul li:has(.' + pageName + ') .icon-' + pictureName).addClass('selected').hover();
                        Application.addNavigationArrows();
                    };
                    this.showPictures(pageName, pictureName);
                }
                Application.showMenuCategory(pageName, callback);
            }
            else {
                Application.hideMenuCategories();
                $link.addClass("selected");
                $('article .' + page.name).show();
            }
            $("nav.link." + pageName).show();
        }
        Application.resizeImagesPanel();
    },
    showPictures: function(pageName, pictureName) {
        var $article = $('article div.' + pageName);
        var $contents = $article.find('.images');
        $contents.html('');
        var post = this.getPost(pageName, pictureName);
        if (post.content)
            $contents.html(post.content);
        else {
            $article.find('h1').html(post.title ? post.title : '');
            $article.find('h3').html(post.description ? post.description : '');

            for (var i = 0; i < post.images.length; i++) {
                var image = post.images[i];
				var full_name = pictureName;
				if (image.name != null && image.name != '')
					full_name += image.name;
                var $image = $('<div class="image"><img src="img/gallery/' + pageName + '/' + full_name + '.jpg" /></div>');
                if (image.width) {
                    $image.find('img').attr('width', image.width);
                }
                if (image.height) {
                    $image.find('img').attr('height', image.height);
                }
                if (image.description) {
                    var $caption = $('<span class="caption">' + image.description + '</span>');
                    if (image.width) {
                        $caption.css('width', image.width + 'px');
                    }
                    $image.append('<br/>');
                    $image.append($caption);
                }
                $contents.append($image);
            }

        }
        $contents.attr('class', 'images');
        if (post.layout)
            $contents.addClass(post.layout);
        $article.show();
    },
    getPost: function(pageName, postName) {
        for (var i = 0; i < this.pages.length; i++) {
            var page = this.pages[i];
            if (page.name == pageName) {
                for (var j = 0; j < page.posts.length; j++) {
                    var post = page.posts[j];
                    if (post.name == postName) {
                        return post;
                    }
                }
            }
        }
        return null;
    },
    toggleMenuCategory: function(category) {
        var $page = $("nav .link." + category).parent();
        if ($page.find(".images").length == 0) {
            var hash = Application.hash();
            hash == category ? Application.goto(category) : location.hash = '#' + category;
        }
    },
    hash: function() {
        var hash = location.hash;
        if (hash)
            hash = hash.substring(1);
        return hash;
    },
    hideMenuCategories: function() {
        var $link = $("nav .link");
        $link.each(function(){
            var $page = $(this).parent();
            $page.find(".images").hide("normal", function() {
                $(this).remove();
                Application.resize();
            });
        });
    },
    showMenuCategory: function(category, callback) {
        var $link = $("nav .link." + category);
        var $page = $link.parent();
        $link.addClass("selected");
        if ($page.find(".images").length > 0) {
            if (callback)
              callback();
            return;
        }
        Application.hideMenuCategories();
        var pageData = $page.data('page');
        if (pageData.posts.length > 1) {
            var $images = Application.createSubmenuImages(pageData);
            $page.append($images);
            $images.show("normal", function() {
                Application.resize();
                if (callback)
                    callback();
            });
        }
        if (!$page.next().is('.clearfix'))
          $page.append($('<div class="clearfix"></div>'));
    },
    bindHashChangeEvent: function() {
        $(window).hashchange(function() {
            Application.goto(Application.hash());
        });
    },
    createSubmenuImages: function(page) {
        var $images = $('<div class="images" style="display: none;"/>');
        $.each(page.posts, function(index, entry) {
            var $entry = $('<a href="#' + page.name + '/' + entry.name + '" class="icon-' + entry.name + '">' + entry.title + '</a>');
            $images.append($entry);
        });
        return $images;
    },
    resizeImagesPanel: function() {
        var sum = 0;
        $("article .image").each(function() {
            sum += $(this).find('img').width() + 40;
        });
        var $images = $('article .images');
        if (sum <= 20 || !$images.hasClass('wide')) {
            $images.css('width', 'auto');
        }
        else
            $('article .images').css('width', sum + 'px');
        this.resize();
    },
    addNavigationArrows: function() {
      if ($('nav ul li .arrow-left, nav ul li .arrow-right').length > 0)
        return;
      var selectedCategory = $('nav ul li .link.selected');
      var images = $('.images a', selectedCategory.parent());
      var selectedImage = images.filter('.selected');
      var isFirst = selectedImage.index() == 0;
      var isLast = selectedImage.index() == (images.size() - 1);
      if (!isFirst) {
        var prevImg = selectedImage.prev().attr('href');
        var leftArrow = $('<a href="' + prevImg + '" class="arrow-left"><img src="img/arrow-left.png"/></a>');
        selectedCategory.before(leftArrow);
      }
      if (!isLast) {
        var nextImg = selectedImage.next().attr('href');
        var rightArrow = $('<a href="' + nextImg + '" class="arrow-right"><img src="img/arrow-right.png"/></a>');
        selectedCategory.after(rightArrow);
      }
    },
    clearNavigationArrows: function() {
      $('.arrow-left, .arrow-right').remove();
    },
	firstPicture: function(pageName) {
		for (var i = 0; i < this.pages.length; i++) {
			page = this.pages[i];
            if (page.name == pageName && page.posts) {
				return page.posts[0].name;
			}
		}
		return '01';
	}
};

