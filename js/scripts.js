jQuery(function($){
    $(document).ready(function(){
        
        
//        if (/Mobi/.test(navigator.userAgent)) {     
//            $('div.homepage-choices-1').click(function(){
//                window.location.href = "/advanced-search.php";
//            });
//            $('div.homepage-choices-2').click(function(){
//                window.location.href = "/advanced-search.php?landlord";
//            });
//            $('div.homepage-choices-3').click(function(){
//                window.location.href = "/advanced-search.php?student";
//            });
//        }
        
            $('.row.sideBar-body').each(function(){
                $(this).click(function(){
                    $('.conversation').addClass('viz');
                });
            });
            
            $('.msgback').click(function(){
                $('.conversation').removeClass('viz');
            });
            
        
            $('.choice').click(function(){
               $('.homepage_choices_cont_2').addClass('viz');
                $('.overlay').addClass('viz');
            });

            $('.overlay').click(function(){
                $(this).hide();
                $('.homepage_choices_cont_2').removeClass('viz');
            });
            $('.closeit').click(function(){
                $('.homepage_choices_cont_2').removeClass('viz');
                $('.overlay').removeClass('viz');
            });
            $('.closeit').hover(function(){
                $(this).css('cursor','pointer');
            });
        
        
        
        $('[data-toggle="tooltip"]').tooltip({
                animated: 'fade',
                placement: 'bottom',
                html: false
            }
        );
        
        $(function(){
            $(".heading-compose").click(function() {
              $(".side-two").css({
                "left": "0"
              });
            });

            $(".newMessage-back").click(function() {
              $(".side-two").css({
                "left": "-100%"
              });
            });
        });
        
        var left = 0;
        var left2 = 0;
        var num = 1;
        var num2 = 1;
        
        $('button#next').click(function(e){
            left -= 33.333; num += 1;
            var lastone = num - 1;
            $('section.inner').css('transform','translateX(calc('+left+'%))');
            $('.bar-'+num).css('background-color','#428bca').addClass('active');
            $('.bar-'+lastone).css('background-color','#ccc').removeClass('active');
            e.stopPropagation();
            
            if($('.bar-3').hasClass('active')){
                $('button.hg9').removeClass('inviz');
                $('#next.lastnext').addClass('inviz');
           }
            
        });
        
            $('.choice#ad_ten').click(function(){
                    $('.ad_ten section.inner2').css('transform','translateX(calc(0%))');
                    $('.ad_ten .progressbar:not(".bar-1")').removeClass('active').css('background-color','#ccc');
                    $('.ad_ten .progressbar.bar-1').addClass('active').css('background-color','#428bca');
            });
        
        
        
        
        //
        
        $('div#next2').click(function(e){
            left2 -= 33.333; num2 += 1;
            var lastone2 = num2 - 1;
            $('section.inner2').css('transform','translateX(calc('+left2+'%))');
            $('.bar-'+num2).css('background-color','#428bca').addClass('active');
            $('.bar-'+lastone2).css('background-color','#ccc').removeClass('active');
            e.stopPropagation();
            
            if($('.ad_ten .bar-3').hasClass('active')){
                $('div.hg9').removeClass('inviz');
                $('#next2.lastnext2').addClass('inviz');
           }
            
        });
        
        $('textarea#hobbies').bind('keyup',function(e){
            
            if(e.which === 188) {
                e.preventDefault();
                var selection = $('textarea#hobbies').val();
                var selectionb4 = "<span>"+selection;
                var result = selectionb4.replace(/,/g,'</span><span>');
                $('div.hobbies_results').html(result).append('</span>');
                return false;
                
             }
            $('div.hobbies_results').each(function(){
                var content = $(this).val();
                if ( content != "") {
                    $(this).css('background-color','#428bca');
                }
            })
        });
        
        
        var anotherinput = '<label style="clear:left;width:90px;"></label><input class="moreinputs" type="date"><span class="morepls" style="float:left">+</span>';
        $('.morepls').click(function(){
            $(this).after(anotherinput);
        });
        
        $('select#type.housetype').change(function(){
            var val = $(this).find("option:selected").attr("value");
            switch (val){
                case "house":
                  $('fieldset#bedrooms').removeClass('inviz');
                  break;
                case "apt":
                    $('fieldset#bedrooms').removeClass('inviz');
                  break;
                default:
                    $('fieldset#bedrooms').addClass('inviz');
              }
        });
        $('select#type.housetype2').change(function(){
            var val = $(this).find("option:selected").attr("value");
            switch (val){
                case "house":
                  $('fieldset#bedrooms2').removeClass('inviz');
                  break;
                case "apt":
                    $('fieldset#bedrooms2').removeClass('inviz');
                  break;
                default:
                    $('fieldset#bedrooms2').addClass('inviz');
              }
        });
        
        $('span.house3, span.apt3').each(function(){
            $(this).click(function(){
                $('fieldset#bedrooms3').removeClass('inviz');
            });
        })
        
        $( ".datepicker" ).each(function(){
            $(this).datepicker({
                dateFormat : 'mm/dd/yy',
                changeMonth : true,
                changeYear : true,
                yearRange: '-100y:c+nn',
                maxDate: '-1d'
        })
     })
        
        
        
        
        $('div.seeking-checkboxes').hide();
      $('p.seeking-checkboxes').click(function(){
          $('div.seeking-checkboxes').show();
      })
      $('div.seeking-checkboxes .close').click(function(){
          $('div.seeking-checkboxes').hide();
      })  
        
        $('#as_t').click(function(){
            $('#manage-ads_as-tenant').addClass('viz');
            $('#manage-ads_as-tenant').removeClassp('inviz');
            $('#manage-ads_as-landlord').addClass('inviz');
            $('#manage-ads_as-landlord').removeClass('viz');
        });
        $('#as_l').click(function(){
            $('#manage-ads_as-tenant').addClass('inviz');
            $('#manage-ads_as-tenant').removeClass('viz');
            $('#manage-ads_as-landlord').addClass('viz');
            $('#manage-ads_as-landlord').removeClass('inviz');
        });
        
        $('#viewings-modal').click(function(){
            $('#viewings-modal').modal();
        })
        $('div#ad_prop').addClass('chosen');
        
        $('div#ad_prop').click(function(){
            $('.ad_prop').addClass('viz');
            $('.ad_prop').removeClass('inviz');
            $('.ad_ten').addClass('inviz');
            $('div#ad_prop').addClass('chosen');
            $('div#ad_ten').removeClass('chosen');
        });
        $('div#ad_ten').click(function(){
            $('.ad_ten').addClass('viz');
            $('.ad_ten').removeClass('inviz');
            $('.ad_prop').addClass('inviz');
            $('div#ad_ten').addClass('chosen');
            $('div#ad_prop').removeClass('chosen');
        });
        
        $('h2#prop_pref').click(function(){
            $('div.my_account-property-preferences').toggleClass('long');
        });
        $('h2#further_info').click(function(){
            $('div.my-account_further-info').toggleClass('long');
        });
        
        $('h2#supp_docs').click(function(){
            $('div.my-account_supporting-documents').toggleClass('long');
        });
        
        $('h2#social_accounts').click(function(){
            $('div.my-account_social-accounts').toggleClass('long');
        });
        $('h2#placeanad_features').click(function(){
            $('div.placeanad_facilities').toggleClass('long');
        });
        $('h2#placeanad_loc').click(function(){
            $('div.placeanad_location').toggleClass('long');
        });
        
        $('#list-view').click(function(){
            $('#prop_results').addClass('viz');
            $('#prop_results').removeClass('inviz');
            $('#prop_results_map').addClass('inviz');
        });
        $('#map-view').click(function(){
            $('#prop_results_map').addClass('viz');
            $('#prop_results_map').removeClass('inviz');
            $('#prop_results').addClass('inviz');
        });
        
        
        $('button.register_go-back').click(function(){
            $('#apply-modal').modal('hide');
            $('#contact-modal').modal('hide');
        });
        $('button.register_continue').click(function(){
            $('.applied_success').addClass('onshow');
            $('.apply').addClass('hideit');
        });
        
        
        $('div.search').click(function(){
            $('.dropdown-search').toggleClass('onshow');
            $('span.search i').toggleClass('up');
            $('.blackout').toggle();
            $('header').addClass('ab');
        });
        
        $('i.fa.menu_icon').click(function(){
            $('.main_navigation ul').toggleClass('onshow');
            $('body').toggleClass('mobile-menu');
        });
      
        //Homepage - three choices
        $('.homepage-choices-1').mouseenter(function(){
            if(! $('.homepage-choices-1').hasClass('selected')){
                $(this).addClass('selected');
            };
            $('.homepage-choices-2').removeClass('selected');
            $('.homepage-choices-3').removeClass('selected');
            
        });
        
        
        
        $('.homepage-choices-2').mouseenter(function(){
            if(! $('.homepage-choices-2').hasClass('selected')){
                $(this).addClass('selected');
            };
            $('.homepage-choices-1').removeClass('selected');
            $('.homepage-choices-3').removeClass('selected');
            
        });
        $('.homepage-choices-3').mouseenter(function(){
            if(! $('.homepage-choices-3').hasClass('selected')){
                $(this).addClass('selected');
            };
            $('.homepage-choices-1').removeClass('selected');
            $('.homepage-choices-2').removeClass('selected');
            
        });     
        
        // On page load, give Tenants the class...
            $('.homepage-choices-1').addClass('picked');
            $('.homepage-choices-1').click(function(){
                $(this).addClass('picked');
                $('.homepage-choices-2').removeClass('picked');
                $('.homepage-choices-3').removeClass('picked');
                $('#choice_tenant').addClass('picked');
                $('#choice_landlord').removeClass('picked');
                $('#choice_student').removeClass('picked');
                
                
            });
            $('.homepage-choices-2').click(function(){
                $(this).addClass('picked');
                $('.homepage-choices-1').removeClass('picked');
                $('.homepage-choices-3').removeClass('picked');
                $('#choice_landlord').addClass('picked');
                $('#choice_student').removeClass('picked');
                $('#choice_tenant').removeClass('picked');
            });
            $('.homepage-choices-3').click(function(){
                $(this).addClass('picked');
                $('.homepage-choices-1').removeClass('picked');
                $('.homepage-choices-2').removeClass('picked');
                $('#choice_landlord').removeClass('picked');
                $('#choice_tenant').removeClass('picked');
                $('#choice_student').addClass('picked');
            });
        $(window).scroll(function(){ // Parallax effects on scrolling
            
		  var scroll = $(window).scrollTop();
		  var logo_scroll = (scroll / 25);
        var header_scroll = (scroll / 5);    
        
            //$('.row.jumbo#homepage').css("background-position-y","-"+ logo_scroll +"px");  
            $('.head-container').css("transform","translateY(-"+ header_scroll +"px)");  
            $('.page-header.home').css("transform","translateY(-"+ header_scroll +"px)");  
            $('.homepage_choices_cont_2').css("transform","translateY(-"+ header_scroll +"px)");  
            $('h5.searching').css("transform","translateY(-"+ header_scroll +"px)");  
        
        });
        
        
        $('.dropdown-search-choice-1').mouseenter(function(){
            if(! $('.dropdown-search-choice-1').hasClass('selectedhover')){
                $(this).addClass('selectedhover');
            };
            $('.dropdown-search-choice-2').removeClass('selectedhover');
            $('.dropdown-search-choice-3').removeClass('selectedhover');
            
            
        });
        $('.dropdown-search-choice-2').mouseenter(function(){
            if(! $('.dropdown-search-choice-2').hasClass('selectedhover')){
                $(this).addClass('selectedhover');
            }
            $('.dropdown-search-choice-1').removeClass('selectedhover');
            $('.dropdown-search-choice-3').removeClass('selectedhover');
            
            
        });        
        $('.dropdown-search-choice-3').mouseenter(function(){
            if(! $('.dropdown-search-choice-3').hasClass('selectedhover')){
                $(this).addClass('selectedhover');
            };
            $('.dropdown-search-choice-1').removeClass('selectedhover');
            $('.dropdown-search-choice-2').removeClass('selectedhover');
            
            
        });
        
       $('div.open').click(function(){
           $(this).addClass('selected');
           $('div.individual').removeClass('selected');
       });
       $('div.individual').click(function(){
           $(this).addClass('selected');
           $('div.open').removeClass('selected');
       });
        
        $('.dropdown-search-choice-1').click(function(){
            $('#prop-search').addClass('viz');
            $('#prop-search').removeClass('inviz');
            $('#tenant-search').addClass('inviz');
            $('#tenant-search').removeClass('viz');
            $('#swap-search').addClass('inviz');
            $('#swap-search').removeClass('viz');
            $('#prop-search-2').addClass('viz');$('#prop-search-3').addClass('viz');
            $('#prop-search-2').removeClass('inviz');$('#prop-search-3').removeClass('inviz');
            $('#tenant-search-2').addClass('inviz');$('#tenant-search-3').addClass('inviz');
            $('#tenant-search-2').removeClass('viz');$('#tenant-search-3').removeClass('viz');
            $('#swap-search-2').addClass('inviz');$('#swap-search-3').addClass('inviz');
            $('#swap-search-2').removeClass('viz');$('#swap-search-3').removeClass('viz');
            $(this).addClass('selected');
            $('.dropdown-search-choice-2').removeClass('selected');
            $('.dropdown-search-choice-3').removeClass('selected');
        });
        $('.dropdown-search-choice-2').click(function(){
            $('#prop-search').addClass('inviz');
            $('#prop-search').removeClass('viz');
            $('#tenant-search').addClass('viz');
            $('#tenant-search').removeClass('inviz');
            $('#swap-search').addClass('inviz');
            $('#swap-search').removeClass('viz');
            $('#prop-search-2').addClass('inviz');$('#prop-search-3').addClass('inviz');
            $('#prop-search-2').removeClass('viz');$('#prop-search-3').removeClass('viz');
            $('#tenant-search-2').addClass('viz');$('#tenant-search-3').addClass('viz');
            $('#tenant-search-2').removeClass('inviz');$('#tenant-search-3').removeClass('inviz');
            $('#swap-search-2').addClass('inviz');$('#swap-search-3').addClass('inviz');
            $('#swap-search-2').removeClass('viz');$('#swap-search-3').removeClass('viz');
            
            $(this).addClass('selected');$('.dropdown-search-choice-1').removeClass('selected');$('.dropdown-search-choice-3').removeClass('selected');
        });
        $('.dropdown-search-choice-3').click(function(){
            $('#prop-search').addClass('inviz');
            $('#prop-search').removeClass('viz');
            $('#tenant-search').addClass('inviz');
            $('#tenant-search').removeClass('viz');
            $('#swap-search').addClass('viz');
            $('#swap-search').removeClass('inviz');
            $('#prop-search-2').addClass('inviz');$('#prop-search-3').addClass('inviz');
            $('#prop-search-2').removeClass('viz');$('#prop-search-3').removeClass('viz');
            $('#tenant-search-2').addClass('inviz');$('#tenant-search-3').addClass('inviz');
            $('#tenant-search-2').removeClass('viz');$('#tenant-search-3').removeClass('viz');
            $('#swap-search-2').addClass('viz');$('#swap-search-3').addClass('viz');
            $('#swap-search-2').removeClass('inviz');$('#swap-search-3').removeClass('inviz');
            $(this).addClass('selected');$('.dropdown-search-choice-1').removeClass('selected');$('.dropdown-search-choice-2').removeClass('selected');
        });
        
        
        
        
        $('span.answer-proofoffunds').text("Not Required");
        $('span.answer-workrefs').text("Not Required");
        $('span.answer-landlordprefs').text("Not Required");
        $('span.answer-couples').text("No");
        
        function req(){
            $('span.answer-proofoffunds').text("Required");
            $('.slider.round.proof').one('click',notreq);
        }
        function notreq(){
            $('span.answer-proofoffunds').text("Not Required");
            $('.slider.round.proof').one('click',req);
        }
        $('.slider.round.proof').one('click',req);
        
        function coup(){
            $('span.answer-couples').text("Yes");
            $('.slider.round.couples').one('click',nocoup);
        }
        function nocoup(){
            $('span.answer-couples').text("No");
            $('.slider.round.couples').one('click',coup);
        }
        $('.slider.round.couples').one('click',coup);
        
        function prefreq(){
            $('span.answer-landlordprefs').text("Required");
            $('.slider.round.prefs').one('click',prefnotreq);
        }
        function prefnotreq(){
            $('span.answer-landlordprefs').text("Not Required");
            $('.slider.round.prefs').one('click',prefreq);
        }
        $('.slider.round.prefs').one('click',prefreq);

        
        function workref(){
            $('span.answer-workrefs').text("Required");
            $('.slider.round.work').one('click',noworkrefs);
        }
        function noworkrefs(){
            $('span.answer-workrefs').text("Not Required");
            $('.slider.round.work').one('click',workref);
        }
        $('.slider.round.work').one('click',workref);
        
       $('select#type').change(function()
            {$('span.tenantsfound').each(function () {
              var $this = $(this);
              $({ Counter: 39 }).animate({ Counter: $this.text() }, {
                duration: 1000,
                easing: 'swing',
                step: function () {
                  $this.text(Math.ceil(this.Counter));
                }
              });
            });
        });
    
        
//    var slider = document.getElementById("myRange");
//    var output = document.getElementById("output");
//    output.innerHTML = slider.value;
//
//        slider.oninput = function() {
//          output.innerHTML = this.value;
//        }  ; 
//        
//    var slider2 = document.getElementById("myRange2");
//    var output2 = document.getElementById("output2");
//    output2.innerHTML = slider2.value;
//
//        slider2.oninput = function() {
//          output2.innerHTML = this.value;
//        }  ; 
//        
//    var slider3 = document.getElementById("myRange3");
//    var output3 = document.getElementById("output3");
//    output3.innerHTML = slider3.value;
//
//        slider3.oninput = function() {
//          output3.innerHTML = this.value;
//        }  ;
//        
//        
//    var slider4 = document.getElementById("myRangedd1");
//    var output4 = document.getElementById("outputdd1");
//    output4.innerHTML = slider4.value;
//
//    slider4.oninput = function() {
//        output4.innerHTML = this.value;
//    } ;  
       
        
        
        $('div.featured_property img').hover(function(){
            var $img1 = $(this).attr('src');
            var $img2 = $(this).attr('data-src');
            
            $(this).attr('src',$img1);
            $(this).attr('data-src',$img2);
            
        });
        
        var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
    
        
        
    });
});