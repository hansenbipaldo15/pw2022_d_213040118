
  
<!-- @BY BAYU LALU -->

<script src="asset/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.button-collapse').sideNav();
	$('.parallax').parallax();

	$(window).scroll(function(){
    	if ($(window).scrollTop() > 290) {
    		$('#navbar1').css({
    			'display':'block'
    		});
    		$('#navbar2').css({
    			'display':'none'
    		});
    	}else{
    		$('#navbar1').css({
    			'display':'none'
    		});
    		$('#navbar2').css({
    			'display':'block'
    		});
    	}
    });


 $('.page').click(function(){
      var tujn = $(this).attr('href');
      var elemenTujuan = $(tujn);

      $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 50
      },650,'swing');
      
    });

 $('.modal').modal( {
			dismissible: false,
			opacity :.7,
			inDuration:250,
			
		});

$(document).on('keydown',function(eventObject){
      switch (eventObject.keyCode){
        case 39:
        displays('kanan')
        console.log('kiri');
        break;
        case 37:
        displays('kiri')
        break;
      }
      function displays(direction){
        switch (direction){
          case 'kanan' :
          $('.admin').css({'display':'block'});
          break;

          case 'kiri' :
          $('.admin').css({'display':'none'});
          break;
        }

        
      }

    });

     $(window).scroll(function(){
      // $var sc = scrollTop();
      if ($(window).scrollTop() > 522) {
       $('.berita1').addClass('bounceInUp');
      }
       if ($(window).scrollTop() > 1250) {
        $('.melayani1').addClass('bounceInLeft');
      }

      if ($(window).scrollTop() > 1650) {
         console.log('1');
        $('.gambar1').addClass('bounceInUp');
      }
    });


});
</script>
</body>
</html>