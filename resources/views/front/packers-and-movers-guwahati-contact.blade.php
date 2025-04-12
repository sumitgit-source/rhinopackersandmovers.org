
@extends('front.mainlayout.mainlayout')

@section('content')

<div class="page-title page-title-contacts bg-pattern" data-bgcolor="3B4B89">
	<div class="page-title-overlay">
		<div class="container">
			  <h1 class="he">
        packers and movers Guwahati, movers and packers Guwahati, packers and movers in Guwahati, movers and packers in Guwahati, packers in Guwahati, movers in Guwahati, packing and moving service in Guwahati, best packers and movers in Guwahati, local packers and movers in Guwahati, near by packers and movers Guwahati
      </h1>
			<h1>CONTACT US</h1>
			<p>Moving never can't be more easy! - +91 9864469464, 9401822253 </p>
		</div>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li class="breadcrumb-HOME"><a href="{{ route('index') }}"><i class="fa fa-home"></i></a></li>
				<li class="active">Contact us</li>
			</ol>
		</div>
	</div>
</div>


<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.563580123342!2d91.76368277845215!3d26.11316123505397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5eb9ff82d303%3A0xa3707dbbebc72300!2s18B%2C%20Kalimandir%20Path%2C%20Nalapara%2C%20Sarusajai%2C%20Guwahati%2C%20Assam%20781034!5e0!3m2!1sen!2sin!4v1729837308821!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>



<div class="feedback">
	<div class="container">
		<div class="row">
			<h2 class="section-title">
				<span class="bold700">CONTACT US</span>
			</h2>
			
			<div class="">
	
		<form class="bookform-form" action="#" role="form" method="post">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
					<input type="text" name="name"  required="" placeholder="Your Name" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
					<input type="text" name="phone"  required="" placeholder="Phone" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
					<input type="text" name="email"  placeholder="E-mail" required />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item name">
					<input type="text" name="shifting_from"  required="" placeholder="Shifting From" />
					<div class="help help-sm help-red">!</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item name">
					<input type="text" name="shifting_to" required placeholder="Shifting To" />
					<div class="help help-sm help-red">!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<textarea name="message"  placeholder="Your message.."></textarea>
				</div>
			</div>
			
			<div class="row latest-row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
					<button class="btn btn-primary">SUBMIT</button>
					<a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a> </div>
			</div>
			<div class="form-messages form-messages-modal"></div>
		</form>
	</div>
		</div>
	</div>
</div>

<div class="make">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 make-text">
				<h2>Online Enquiry Now</h2>
				<p>Moving never can't be more easy! - +91 9864469464, 9401822253 </p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 make-button"> <a href="#bookform1" class="fancybox-2 btn btn-default">
				<span class="plus">*</span>
				Submit Quiry</a> </div>
		</div>
	</div>
</div>



<div class="history">

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 history-images">

				<center>    <h3 class="ui-title-inner">Our Network</h3></center>

				<hr>

				 <div class="col-lg-4 col-sm-4 col-xs-12">

           

             <ul class="list-mark">

               <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-guwahati') }}">Packers and Movers In Guwahati</a></li><br>

               <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-nagaon') }}">Packers and Movers In Dimapur-Nagaland</a></li><br>

               <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-jagiroad') }}">Packers and Movers In Imphal-Manipur</a></li><br>

               <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-tezpur') }}">Packers and Movers In Aizwal-Mizoram</a></li><br>

               <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-jorhat') }}">Packers and Movers In Agartala-Tripura</a></li>    <br>        

                <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-diphu') }}">Packers and Movers In Kolkata-West Bengal </a></li><br>

                <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-karimganj') }}">Packers and Movers In Visakhapatnam</a></li><br>       

             </ul>   

            </div>



              <div class="col-lg-4 col-sm-4 col-xs-12">              

                <ul class="list-mark">

                  <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-dibrugarh') }}" >Packers and Movers In Hyderabad</a></li><br>

                   <li class="list-mark__item"><a style="color:#fff; font-size:13px;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-digboi') }}">Packers and Movers In Bengaluru-Karnataka</a></li><br>

                   <li class="list-mark__item"><a style="color:#fff; font-size:13px;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-duliajan') }}" >Packers and Movers In Mumbai-Maharashtra</a></li><br>

                   <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-tinsukia') }}" >Packers and Movers In Gujarat-Ahmedabad</a></li><br>

                   <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-damdama') }}">Packers and Movers In Delhi
</a></li><br>

                    <li class="list-mark__item"><a style="color:#fff; font-size:12px;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-goalpara') }}" >Packers and Movers In Bhopal-Madhya Pradesh</a></li>   <br>     

                    <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-lakhimpur') }}" >Packers and Movers In Patna-Bihar</a></li><br> 

                   </ul>

              </div>

			  
              <div class="col-lg-4 col-sm-4 col-xs-12">                   

                <ul class="list-mark">                 

                    <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-silchar') }}" >Packers and Movers In Tamil-Nadu</a></li><br>

                  <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-shillong') }}">Packers and Movers In Tirupati Balaji</a></li><br>

                   <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-bongaigaon') }}" >Packers and Movers In Uttar Pradesh</a></li><br>
{{-- 
                    <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-kokrajhar') }}" >Packers and movers Kokrajhar</a></li><br>

                     <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-tura') }}" >Packers and Movers Tura</a></li><br>

                      <li class="list-mark__item"><a style="color:#fff;" class="btn btn-primary btn-block" href="{{ route('packers-and-movers-itanagar') }}" >Packers and Movers Itanagar</a></li><br> --}}

                     

                   </ul>           

              </div>



             

			</div>

			

		</div>

	</div>

</div>

<!-- =========================
    CLIENTS
============================== -->
<div class="clients" id="clients">
	<div class="container">
		<div class="row">
			<p class="section-subtitle">OUR CLIENTS</p>
			<div class="clients-container">
				<div class="owl-clients" id="owl-clients"> 
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients1.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients2.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients3.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients4.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients5.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients2.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
					
					<!-- CLIENTS ITEM -->
					<div class="clients-item"> <img src="images/clients3.jpg" alt="packers and movers guwahati, movers and packers guwahati, packers in guwahati, movers in guwahati" /> </div>
				</div>
				
				<!-- CLIENTS BUTTONS -->
				<div class="carousel-btn carousel-next" id="next-clients"><i class="fa fa-angle-right"></i></div>
				<div class="carousel-btn carousel-prev" id="prev-clients"><i class="fa fa-angle-left"></i></div>
			</div>
		</div>
	</div>
</div>
<!-- =========================
    END CLIENTS
============================== --> 


@endsection
