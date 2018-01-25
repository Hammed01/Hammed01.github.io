    $(function(){
        document.getElementById('showform').addEventListener('click', function(){
            document.getElementById('Form').style.visibility='visible';
        });


      var $dom = document.getElementById('Form');

        var $window = $(window);
        $window.on('scroll', function(){

            if ($window.scrollTop() <= 300){
                $dom.style.visibility='hidden';

            }else{

            }
        })
    });

    




