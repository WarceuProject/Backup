<footer class="footer">


<div class="footer-bottom">
<div class="container clearfix">
<div class="row">
<div class="col-sm-12 text-center">COPYRIGHT © 2023 NEXO-INVESTFX ALL RIGHTS RESERVED.</div>

</div>
</div>
</div>

</footer>

<style>
    .btn-default {
        color: #fff;
        background-color: #31d7a9;
        font-weight: 800;
    }
    
    .account-info img {
        width: 35px;
    }
    
    select{
        background-color: #002852;
    }
    
    .sbmt {
        background: #31d7a9;
        border: none;
        padding: 7px 15px;
        border-radius: 5px;
        font-weight: 800;
    }
    

</style>

<!-- Bootstrap core JavaScript================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.matchHeight-min.js"></script>
<script type="text/javascript">jQuery('.coleql_height').matchHeight();</script>
<script src="js/accordion.js"></script>

<script src="js/wow.js"></script>


<script type="text/javascript">
jQuery(document).ready(function($){
$(".custom-accordion").accordionjs();
});
</script>

<script>
wow = new WOW(
{
animateClass: 'animated',
offset: 100,
callback: function(box) {
console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
}
}
);
wow.init();
document.getElementById('moar').onclick = function() {
var section = document.createElement('section');
//section.className = 'section--purple wow fadeInDown';
this.parentNode.insertBefore(section, this);
};
</script>

 </body>
</html>