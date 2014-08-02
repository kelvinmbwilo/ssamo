@extends('layout.master')

@section('contents')

<div id="cont" style="overflow:hidden;">

    <div id="contact-text">
        <div id="contact-text-cont">
            <h1>CONTACTS</h1>
            <p>SSAMO Media<br/>
                Masaki<br/>
                Dar es saalam<br/>
                Tanzania<br/>
                P.O Box ...<br/><br/>
                <img src="{{ asset('awd/images/tel_awdagency.png') }}" /> +255 xxx xxx xxx<br/>
                <img src="{{ asset('awd/images/fax_awdagency.png') }}" /> +255 xxx xxx xxx<br/>
                <img src="{{ asset('awd/images/mail_awdagency.png') }}" /> <a href="mailto:hello@ssamomedia.com">hello@ssamomedia.com</a><br/><br/>

                <a id="text-map" target="_blank" href="https://www.google.it/maps/place/Awd+Agency/@43.239176,13.746361,17z/data=!3m1!4b1!4m2!3m1!1s0x13321293dc1eb575:0x6c1ce736cd176c02"><img style="margin-bottom:-7px;" src="{{ asset('awd/images/maps_awdagency.png') }}" /> MAPS</a><br/>
            </p>


            <form action="http://www.awdagency.com/wp-content/themes/awdagency/process_form.php" method="post" id="target">
                <div id="success-message"></div>
                <div id="incomplete-message"></div>
                <div id="invalid-email"></div>
                <input type="text" value="iscriviti alla newsletter / sign up" name="mail" id="mail"/>
                <input type="submit" value="" id="newsletter_invia" />
            </form>

        </div>
    </div>

    <div id="contact-map">
        <iframe style="width:100%; height:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31697.41201522115!2d39.28065065!3d-6.748316299999976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d084147b0e5%3A0xa2c90d938443433e!2sMasaki%2C+Dar+es+Salaam%2C+Tanzania!5e0!3m2!1sen!2s!4v1406938576457" width="800" height="600" frameborder="0" style="border:0"></iframe>
<!--        <iframe style="width:100%; height:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.it/maps?cbp=12,134.33,,0,11.17&amp;layer=c&amp;panoid=fBn4pUmU7kWatvw4GDkU0w&amp;cbll=43.238914,13.745769&amp;ie=UTF8&amp;ll=43.238914,13.745769&amp;spn=0.506228,1.057434&amp;t=h&amp;z=11&amp;source=embed&amp;output=svembed"></iframe>-->
    </div>

</div>
@stop