<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onestopshop
 */

?>
<div class="copyright">
  <div class="container">
    <div class="col-md-4 col-lg-4 footer-copyright">
      <p>Copyright © Business Automation Ltd. 2017</p>
    </div>    
  </div>
</div>
<div class="cmo-to-top" style="display: none;"><a href="javascript:void(0);" class="cmo-to-top-anchor"><i class="fa fa-chevron-up"></i></a></div>
	<?php /* ?></div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'onestopshop' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. *//*
				printf( esc_html__( 'Proudly powered by %s', 'onestopshop' ), 'WordPress' );
			 ?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. *//*
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'onestopshop' ), 'onestopshop', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page --><?php */ ?>

<?php wp_footer(); ?>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<script>
$(document).ready(function(){

$("#nav-link-search").on('click', function() {
	if ($(this).hasClass("visible-search")) $(this).removeClass("visible-search");
	else
		$(this).addClass("visible-search");
	return false;
});

$("#nav-search-container").on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    return false;
});

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " header-stuck do-animate";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
                    document.getElementById(this.elements[i]).className.replace( /(?:^|\s)header-stuck do-animate(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "cmo-header"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
offSetManager();

$("a.cmo-to-top-anchor").on('click', function(e) {
	$("html, body").animate({
		scrollTop: 0
	}, 1500);
	e.preventDefault();
	e.stopPropagation();
});
$(window).on('scroll', function(e) {
	if ($(window).scrollTop() > 100) {
		if ($(".cmo-to-top").is(":hidden")) {
			$(".cmo-to-top").fadeIn();
		}
	} else {
		if ($(".cmo-to-top").is(":visible")) {
			$(".cmo-to-top").fadeOut();
		}
	}
});

});

//if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
//window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle(delta) {
    var time = 1000;
	var distance = 300;
    
    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time );
}

</script>

</body>
</html>
