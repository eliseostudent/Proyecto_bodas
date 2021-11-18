<x-app-layout>
    <x-slot name="header_mobile">
        @include('layouts.header_mobile_menu')
    </x-slot>
    <x-slot name="menu_sidebar">
        @include('layouts.menu_sidebar')
    </x-slot>
    <x-slot name='estilos'>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
              .blanco_bordes{
                  color: #fff;
                  text-shadow: 0 0 2px #000;
              }
              .cursiva{
                  font-family: 'Great Vibes', cursive;
              }
              .activo{
                  background-color: #fff;
              }
              .carousel-indicators {
                  position: absolute;
                  bottom: 10px;
                  left: 50%;
                  z-index: 15;
                  width: 60%;
                  padding-left: 0;
                  margin-left: -30%;
                  text-align: center;
                  list-style: none;
              }
              .carousel-indicators li {
                  display: inline-block;
                  width: 30px;
                  height: 5px;
                  margin: 1px;
                  margin-right: 5px;
                  text-indent: -999px;
                  cursor: pointer;
                  background-color: #000\9;
                  background-color: rgba(0,0,0,0);
                  border: 1px solid #fff;
                  border-radius: 10px;
              }
              .carousel-indicators .active {
                  width: 30px;
                  height: 5px;
                  background-color: #fff;
                  margin-right: 5px;
              }
        </style>
    </x-slot>
    @include('evento.eventoVistaPrevia')
    <x-slot name="scriptsExtras">
        <script formato="{{$evento->fecha_formato}}">
            document.currentScript = document.currentScript || (function() {
            var scripts = document.getElementsByTagName('script');
            return scripts[scripts.length - 1];
            })();
            var end = new Date(document.currentScript.getAttribute('formato'));

                var _second = 1000;
                var _minute = _second * 60;
                var _hour = _minute * 60;
                var _day = _hour * 24;
                var timer;

                function showRemaining() {
                    var now = new Date();
                    var distance = end - now;
                    if (distance < 0) {

                        clearInterval(timer);
                        document.getElementById('countdown').innerHTML = 'Expirado!';

                        return;
                    }
                    var days = Math.floor(distance / _day);
                    var hours = Math.floor((distance % _day) / _hour);
                    var minutes = Math.floor((distance % _hour) / _minute);
                    var seconds = Math.floor((distance % _minute) / _second);
                    document.getElementById('dias').innerHTML=days;
                    document.getElementById('horas').innerHTML=hours;
                    document.getElementById('minutos').innerHTML=minutes;
                    document.getElementById('segundos').innerHTML=seconds;
                }

                timer = setInterval(showRemaining, 1000);
          </script>
          <script>
          $(document).ready(function(){
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#inicio']").on('click', function(event) {

              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                  scrollTop: $(hash).offset().top
                }, 900, function(){

                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                });
              } // End if
            });
          })
        </script>
    </x-slot>

</x-app-layout>
