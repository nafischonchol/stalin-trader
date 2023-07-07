<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#313131" />
    <!-- Site Properties -->
    <title> {{ $general->siteName(__($pageTitle)) }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/templates/trending/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/templates/trending/css/style.css')}}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-2-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url(img/in-signin-image.jpg);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-4-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="index.html">
                                        <img class="uk-margin-small-right in-offset-top-10" src="img/in-lazy.gif"
                                            data-src="img/in-logo-2.svg" alt="wave" width="134" height="23" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Create your account
                                    </p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Already  have an
                                        account? <a href="#">Login here</a></p>
                                        <div class="uk-margin-medium-left in-margin-remove-left@s">
                                            <form action="{{ route('user.register') }}" method="POST"  id="contact-form" class="uk-form uk-grid-small" data-uk-grid>
                                                @csrf
                                                <div class="uk-width-1-2@s uk-inline">
                                                    <span class="uk-form-icon fas fa-user fa-sm"></span>
                                                    <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                                                </div>
                                                <div class="uk-width-1-2@s uk-inline">
                                                    <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                                                    <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                                                </div>
                                                <div class="uk-width-1-2@s uk-inline">
                                                    <span class="uk-form-icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                        <path
                                                            d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                                                    </svg></span>
                                                    <select name="country" class="uk-input uk-border-rounded" id="country">
                                                        <option data-mobile_code="93" value="Afghanistan" data-code="AF">
                                                            Afghanistan</option>
                                                        <option data-mobile_code="358" value="Aland Islands" data-code="AX">
                                                            Aland Islands</option>
                                                        <option data-mobile_code="355" value="Albania" data-code="AL">
                                                            Albania</option>
                                                        <option data-mobile_code="213" value="Algeria" data-code="DZ">
                                                            Algeria</option>
                                                        <option data-mobile_code="1684" value="AmericanSamoa" data-code="AS">
                                                            AmericanSamoa</option>
                                                        <option data-mobile_code="376" value="Andorra" data-code="AD">
                                                            Andorra</option>
                                                        <option data-mobile_code="244" value="Angola" data-code="AO">
                                                            Angola</option>
                                                        <option data-mobile_code="1264" value="Anguilla" data-code="AI">
                                                            Anguilla</option>
                                                        <option data-mobile_code="672" value="Antarctica" data-code="AQ">
                                                            Antarctica</option>
                                                        <option data-mobile_code="1268" value="Antigua and Barbuda" data-code="AG">
                                                            Antigua and Barbuda</option>
                                                        <option data-mobile_code="54" value="Argentina" data-code="AR">
                                                            Argentina</option>
                                                        <option data-mobile_code="374" value="Armenia" data-code="AM">
                                                            Armenia</option>
                                                        <option data-mobile_code="297" value="Aruba" data-code="AW">
                                                            Aruba</option>
                                                        <option data-mobile_code="61" value="Australia" data-code="AU">
                                                            Australia</option>
                                                        <option data-mobile_code="43" value="Austria" data-code="AT">
                                                            Austria</option>
                                                        <option data-mobile_code="994" value="Azerbaijan" data-code="AZ">
                                                            Azerbaijan</option>
                                                        <option data-mobile_code="1242" value="Bahamas" data-code="BS">
                                                            Bahamas</option>
                                                        <option data-mobile_code="973" value="Bahrain" data-code="BH">
                                                            Bahrain</option>
                                                        <option data-mobile_code="880" value="Bangladesh" data-code="BD" selected="selected">
                                                            Bangladesh</option>
                                                        <option data-mobile_code="1246" value="Barbados" data-code="BB">
                                                            Barbados</option>
                                                        <option data-mobile_code="375" value="Belarus" data-code="BY">
                                                            Belarus</option>
                                                        <option data-mobile_code="32" value="Belgium" data-code="BE">
                                                            Belgium</option>
                                                        <option data-mobile_code="501" value="Belize" data-code="BZ">
                                                            Belize</option>
                                                        <option data-mobile_code="229" value="Benin" data-code="BJ">
                                                            Benin</option>
                                                        <option data-mobile_code="1441" value="Bermuda" data-code="BM">
                                                            Bermuda</option>
                                                        <option data-mobile_code="975" value="Bhutan" data-code="BT">
                                                            Bhutan</option>
                                                        <option data-mobile_code="591" value="Plurinational State of Bolivia" data-code="BO">
                                                            Plurinational State of Bolivia</option>
                                                        <option data-mobile_code="387" value="Bosnia and Herzegovina" data-code="BA">
                                                            Bosnia and Herzegovina</option>
                                                        <option data-mobile_code="267" value="Botswana" data-code="BW">
                                                            Botswana</option>
                                                        <option data-mobile_code="55" value="Brazil" data-code="BR">
                                                            Brazil</option>
                                                        <option data-mobile_code="246" value="British Indian Ocean Territory" data-code="IO">
                                                            British Indian Ocean Territory</option>
                                                        <option data-mobile_code="673" value="Brunei Darussalam" data-code="BN">
                                                            Brunei Darussalam</option>
                                                        <option data-mobile_code="359" value="Bulgaria" data-code="BG">
                                                            Bulgaria</option>
                                                        <option data-mobile_code="226" value="Burkina Faso" data-code="BF">
                                                            Burkina Faso</option>
                                                        <option data-mobile_code="257" value="Burundi" data-code="BI">
                                                            Burundi</option>
                                                        <option data-mobile_code="855" value="Cambodia" data-code="KH">
                                                            Cambodia</option>
                                                        <option data-mobile_code="237" value="Cameroon" data-code="CM">
                                                            Cameroon</option>
                                                        <option data-mobile_code="1" value="Canada" data-code="CA">
                                                            Canada</option>
                                                        <option data-mobile_code="238" value="Cape Verde" data-code="CV">
                                                            Cape Verde</option>
                                                        <option data-mobile_code=" 345" value="Cayman Islands" data-code="KY">
                                                            Cayman Islands</option>
                                                        <option data-mobile_code="236" value="Central African Republic" data-code="CF">
                                                            Central African Republic</option>
                                                        <option data-mobile_code="235" value="Chad" data-code="TD">
                                                            Chad</option>
                                                        <option data-mobile_code="56" value="Chile" data-code="CL">
                                                            Chile</option>
                                                        <option data-mobile_code="86" value="China" data-code="CN">
                                                            China</option>
                                                        <option data-mobile_code="61" value="Christmas Island" data-code="CX">
                                                            Christmas Island</option>
                                                        <option data-mobile_code="61" value="Cocos (Keeling) Islands" data-code="CC">
                                                            Cocos (Keeling) Islands</option>
                                                        <option data-mobile_code="57" value="Colombia" data-code="CO">
                                                            Colombia</option>
                                                        <option data-mobile_code="269" value="Comoros" data-code="KM">
                                                            Comoros</option>
                                                        <option data-mobile_code="242" value="Congo" data-code="CG">
                                                            Congo</option>
                                                        <option data-mobile_code="243" value="The Democratic Republic of the Congo" data-code="CD">
                                                            The Democratic Republic of the Congo</option>
                                                        <option data-mobile_code="682" value="Cook Islands" data-code="CK">
                                                            Cook Islands</option>
                                                        <option data-mobile_code="506" value="Costa Rica" data-code="CR">
                                                            Costa Rica</option>
                                                        <option data-mobile_code="225" value="Cote d'Ivoire" data-code="CI">
                                                            Cote d'Ivoire</option>
                                                        <option data-mobile_code="385" value="Croatia" data-code="HR">
                                                            Croatia</option>
                                                        <option data-mobile_code="53" value="Cuba" data-code="CU">
                                                            Cuba</option>
                                                        <option data-mobile_code="357" value="Cyprus" data-code="CY">
                                                            Cyprus</option>
                                                        <option data-mobile_code="420" value="Czech Republic" data-code="CZ">
                                                            Czech Republic</option>
                                                        <option data-mobile_code="45" value="Denmark" data-code="DK">
                                                            Denmark</option>
                                                        <option data-mobile_code="253" value="Djibouti" data-code="DJ">
                                                            Djibouti</option>
                                                        <option data-mobile_code="1767" value="Dominica" data-code="DM">
                                                            Dominica</option>
                                                        <option data-mobile_code="1849" value="Dominican Republic" data-code="DO">
                                                            Dominican Republic</option>
                                                        <option data-mobile_code="593" value="Ecuador" data-code="EC">
                                                            Ecuador</option>
                                                        <option data-mobile_code="20" value="Egypt" data-code="EG">
                                                            Egypt</option>
                                                        <option data-mobile_code="503" value="El Salvador" data-code="SV">
                                                            El Salvador</option>
                                                        <option data-mobile_code="240" value="Equatorial Guinea" data-code="GQ">
                                                            Equatorial Guinea</option>
                                                        <option data-mobile_code="291" value="Eritrea" data-code="ER">
                                                            Eritrea</option>
                                                        <option data-mobile_code="372" value="Estonia" data-code="EE">
                                                            Estonia</option>
                                                        <option data-mobile_code="251" value="Ethiopia" data-code="ET">
                                                            Ethiopia</option>
                                                        <option data-mobile_code="500" value="Falkland Islands (Malvinas)" data-code="FK">
                                                            Falkland Islands (Malvinas)</option>
                                                        <option data-mobile_code="298" value="Faroe Islands" data-code="FO">
                                                            Faroe Islands</option>
                                                        <option data-mobile_code="679" value="Fiji" data-code="FJ">
                                                            Fiji</option>
                                                        <option data-mobile_code="358" value="Finland" data-code="FI">
                                                            Finland</option>
                                                        <option data-mobile_code="33" value="France" data-code="FR">
                                                            France</option>
                                                        <option data-mobile_code="594" value="French Guiana" data-code="GF">
                                                            French Guiana</option>
                                                        <option data-mobile_code="689" value="French Polynesia" data-code="PF">
                                                            French Polynesia</option>
                                                        <option data-mobile_code="241" value="Gabon" data-code="GA">
                                                            Gabon</option>
                                                        <option data-mobile_code="220" value="Gambia" data-code="GM">
                                                            Gambia</option>
                                                        <option data-mobile_code="995" value="Georgia" data-code="GE">
                                                            Georgia</option>
                                                        <option data-mobile_code="49" value="Germany" data-code="DE">
                                                            Germany</option>
                                                        <option data-mobile_code="233" value="Ghana" data-code="GH">
                                                            Ghana</option>
                                                        <option data-mobile_code="350" value="Gibraltar" data-code="GI">
                                                            Gibraltar</option>
                                                        <option data-mobile_code="30" value="Greece" data-code="GR">
                                                            Greece</option>
                                                        <option data-mobile_code="299" value="Greenland" data-code="GL">
                                                            Greenland</option>
                                                        <option data-mobile_code="1473" value="Grenada" data-code="GD">
                                                            Grenada</option>
                                                        <option data-mobile_code="590" value="Guadeloupe" data-code="GP">
                                                            Guadeloupe</option>
                                                        <option data-mobile_code="1671" value="Guam" data-code="GU">
                                                            Guam</option>
                                                        <option data-mobile_code="502" value="Guatemala" data-code="GT">
                                                            Guatemala</option>
                                                        <option data-mobile_code="44" value="Guernsey" data-code="GG">
                                                            Guernsey</option>
                                                        <option data-mobile_code="224" value="Guinea" data-code="GN">
                                                            Guinea</option>
                                                        <option data-mobile_code="245" value="Guinea-Bissau" data-code="GW">
                                                            Guinea-Bissau</option>
                                                        <option data-mobile_code="595" value="Guyana" data-code="GY">
                                                            Guyana</option>
                                                        <option data-mobile_code="509" value="Haiti" data-code="HT">
                                                            Haiti</option>
                                                        <option data-mobile_code="379" value="Holy See (Vatican City State)" data-code="VA">
                                                            Holy See (Vatican City State)</option>
                                                        <option data-mobile_code="504" value="Honduras" data-code="HN">
                                                            Honduras</option>
                                                        <option data-mobile_code="852" value="Hong Kong" data-code="HK">
                                                            Hong Kong</option>
                                                        <option data-mobile_code="36" value="Hungary" data-code="HU">
                                                            Hungary</option>
                                                        <option data-mobile_code="354" value="Iceland" data-code="IS">
                                                            Iceland</option>
                                                        <option data-mobile_code="91" value="India" data-code="IN">
                                                            India</option>
                                                        <option data-mobile_code="62" value="Indonesia" data-code="ID">
                                                            Indonesia</option>
                                                        <option data-mobile_code="98" value="Iran, Islamic Republic of Persian Gulf" data-code="IR">
                                                            Iran, Islamic Republic of Persian Gulf</option>
                                                        <option data-mobile_code="964" value="Iraq" data-code="IQ">
                                                            Iraq</option>
                                                        <option data-mobile_code="353" value="Ireland" data-code="IE">
                                                            Ireland</option>
                                                        <option data-mobile_code="44" value="Isle of Man" data-code="IM">
                                                            Isle of Man</option>
                                                        <option data-mobile_code="972" value="Israel" data-code="IL">
                                                            Israel</option>
                                                        <option data-mobile_code="39" value="Italy" data-code="IT">
                                                            Italy</option>
                                                        <option data-mobile_code="1876" value="Jamaica" data-code="JM">
                                                            Jamaica</option>
                                                        <option data-mobile_code="81" value="Japan" data-code="JP">
                                                            Japan</option>
                                                        <option data-mobile_code="44" value="Jersey" data-code="JE">
                                                            Jersey</option>
                                                        <option data-mobile_code="962" value="Jordan" data-code="JO">
                                                            Jordan</option>
                                                        <option data-mobile_code="77" value="Kazakhstan" data-code="KZ">
                                                            Kazakhstan</option>
                                                        <option data-mobile_code="254" value="Kenya" data-code="KE">
                                                            Kenya</option>
                                                        <option data-mobile_code="686" value="Kiribati" data-code="KI">
                                                            Kiribati</option>
                                                        <option data-mobile_code="850" value="Democratic People's Republic of Korea" data-code="KP">
                                                            Democratic People's Republic of Korea</option>
                                                        <option data-mobile_code="82" value="Republic of South Korea" data-code="KR">
                                                            Republic of South Korea</option>
                                                        <option data-mobile_code="965" value="Kuwait" data-code="KW">
                                                            Kuwait</option>
                                                        <option data-mobile_code="996" value="Kyrgyzstan" data-code="KG">
                                                            Kyrgyzstan</option>
                                                        <option data-mobile_code="856" value="Laos" data-code="LA">
                                                            Laos</option>
                                                        <option data-mobile_code="371" value="Latvia" data-code="LV">
                                                            Latvia</option>
                                                        <option data-mobile_code="961" value="Lebanon" data-code="LB">
                                                            Lebanon</option>
                                                        <option data-mobile_code="266" value="Lesotho" data-code="LS">
                                                            Lesotho</option>
                                                        <option data-mobile_code="231" value="Liberia" data-code="LR">
                                                            Liberia</option>
                                                        <option data-mobile_code="218" value="Libyan Arab Jamahiriya" data-code="LY">
                                                            Libyan Arab Jamahiriya</option>
                                                        <option data-mobile_code="423" value="Liechtenstein" data-code="LI">
                                                            Liechtenstein</option>
                                                        <option data-mobile_code="370" value="Lithuania" data-code="LT">
                                                            Lithuania</option>
                                                        <option data-mobile_code="352" value="Luxembourg" data-code="LU">
                                                            Luxembourg</option>
                                                        <option data-mobile_code="853" value="Macao" data-code="MO">
                                                            Macao</option>
                                                        <option data-mobile_code="389" value="Macedonia" data-code="MK">
                                                            Macedonia</option>
                                                        <option data-mobile_code="261" value="Madagascar" data-code="MG">
                                                            Madagascar</option>
                                                        <option data-mobile_code="265" value="Malawi" data-code="MW">
                                                            Malawi</option>
                                                        <option data-mobile_code="60" value="Malaysia" data-code="MY">
                                                            Malaysia</option>
                                                        <option data-mobile_code="960" value="Maldives" data-code="MV">
                                                            Maldives</option>
                                                        <option data-mobile_code="223" value="Mali" data-code="ML">
                                                            Mali</option>
                                                        <option data-mobile_code="356" value="Malta" data-code="MT">
                                                            Malta</option>
                                                        <option data-mobile_code="692" value="Marshall Islands" data-code="MH">
                                                            Marshall Islands</option>
                                                        <option data-mobile_code="596" value="Martinique" data-code="MQ">
                                                            Martinique</option>
                                                        <option data-mobile_code="222" value="Mauritania" data-code="MR">
                                                            Mauritania</option>
                                                        <option data-mobile_code="230" value="Mauritius" data-code="MU">
                                                            Mauritius</option>
                                                        <option data-mobile_code="262" value="Mayotte" data-code="YT">
                                                            Mayotte</option>
                                                        <option data-mobile_code="52" value="Mexico" data-code="MX">
                                                            Mexico</option>
                                                        <option data-mobile_code="691" value="Federated States of Micronesia" data-code="FM">
                                                            Federated States of Micronesia</option>
                                                        <option data-mobile_code="373" value="Moldova" data-code="MD">
                                                            Moldova</option>
                                                        <option data-mobile_code="377" value="Monaco" data-code="MC">
                                                            Monaco</option>
                                                        <option data-mobile_code="976" value="Mongolia" data-code="MN">
                                                            Mongolia</option>
                                                        <option data-mobile_code="382" value="Montenegro" data-code="ME">
                                                            Montenegro</option>
                                                        <option data-mobile_code="1664" value="Montserrat" data-code="MS">
                                                            Montserrat</option>
                                                        <option data-mobile_code="212" value="Morocco" data-code="MA">
                                                            Morocco</option>
                                                        <option data-mobile_code="258" value="Mozambique" data-code="MZ">
                                                            Mozambique</option>
                                                        <option data-mobile_code="95" value="Myanmar" data-code="MM">
                                                            Myanmar</option>
                                                        <option data-mobile_code="264" value="Namibia" data-code="NA">
                                                            Namibia</option>
                                                        <option data-mobile_code="674" value="Nauru" data-code="NR">
                                                            Nauru</option>
                                                        <option data-mobile_code="977" value="Nepal" data-code="NP">
                                                            Nepal</option>
                                                        <option data-mobile_code="31" value="Netherlands" data-code="NL">
                                                            Netherlands</option>
                                                        <option data-mobile_code="599" value="Netherlands Antilles" data-code="AN">
                                                            Netherlands Antilles</option>
                                                        <option data-mobile_code="687" value="New Caledonia" data-code="NC">
                                                            New Caledonia</option>
                                                        <option data-mobile_code="64" value="New Zealand" data-code="NZ">
                                                            New Zealand</option>
                                                        <option data-mobile_code="505" value="Nicaragua" data-code="NI">
                                                            Nicaragua</option>
                                                        <option data-mobile_code="227" value="Niger" data-code="NE">
                                                            Niger</option>
                                                        <option data-mobile_code="234" value="Nigeria" data-code="NG">
                                                            Nigeria</option>
                                                        <option data-mobile_code="683" value="Niue" data-code="NU">
                                                            Niue</option>
                                                        <option data-mobile_code="672" value="Norfolk Island" data-code="NF">
                                                            Norfolk Island</option>
                                                        <option data-mobile_code="1670" value="Northern Mariana Islands" data-code="MP">
                                                            Northern Mariana Islands</option>
                                                        <option data-mobile_code="47" value="Norway" data-code="NO">
                                                            Norway</option>
                                                        <option data-mobile_code="968" value="Oman" data-code="OM">
                                                            Oman</option>
                                                        <option data-mobile_code="92" value="Pakistan" data-code="PK">
                                                            Pakistan</option>
                                                        <option data-mobile_code="680" value="Palau" data-code="PW">
                                                            Palau</option>
                                                        <option data-mobile_code="970" value="Palestinian Territory" data-code="PS">
                                                            Palestinian Territory</option>
                                                        <option data-mobile_code="507" value="Panama" data-code="PA">
                                                            Panama</option>
                                                        <option data-mobile_code="675" value="Papua New Guinea" data-code="PG">
                                                            Papua New Guinea</option>
                                                        <option data-mobile_code="595" value="Paraguay" data-code="PY">
                                                            Paraguay</option>
                                                        <option data-mobile_code="51" value="Peru" data-code="PE">
                                                            Peru</option>
                                                        <option data-mobile_code="63" value="Philippines" data-code="PH">
                                                            Philippines</option>
                                                        <option data-mobile_code="872" value="Pitcairn" data-code="PN">
                                                            Pitcairn</option>
                                                        <option data-mobile_code="48" value="Poland" data-code="PL">
                                                            Poland</option>
                                                        <option data-mobile_code="351" value="Portugal" data-code="PT">
                                                            Portugal</option>
                                                        <option data-mobile_code="1939" value="Puerto Rico" data-code="PR">
                                                            Puerto Rico</option>
                                                        <option data-mobile_code="974" value="Qatar" data-code="QA">
                                                            Qatar</option>
                                                        <option data-mobile_code="40" value="Romania" data-code="RO">
                                                            Romania</option>
                                                        <option data-mobile_code="7" value="Russia" data-code="RU">
                                                            Russia</option>
                                                        <option data-mobile_code="250" value="Rwanda" data-code="RW">
                                                            Rwanda</option>
                                                        <option data-mobile_code="262" value="Reunion" data-code="RE">
                                                            Reunion</option>
                                                        <option data-mobile_code="590" value="Saint Barthelemy" data-code="BL">
                                                            Saint Barthelemy</option>
                                                        <option data-mobile_code="290" value="Saint Helena" data-code="SH">
                                                            Saint Helena</option>
                                                        <option data-mobile_code="1869" value="Saint Kitts and Nevis" data-code="KN">
                                                            Saint Kitts and Nevis</option>
                                                        <option data-mobile_code="1758" value="Saint Lucia" data-code="LC">
                                                            Saint Lucia</option>
                                                        <option data-mobile_code="590" value="Saint Martin" data-code="MF">
                                                            Saint Martin</option>
                                                        <option data-mobile_code="508" value="Saint Pierre and Miquelon" data-code="PM">
                                                            Saint Pierre and Miquelon</option>
                                                        <option data-mobile_code="1784" value="Saint Vincent and the Grenadines" data-code="VC">
                                                            Saint Vincent and the Grenadines</option>
                                                        <option data-mobile_code="685" value="Samoa" data-code="WS">
                                                            Samoa</option>
                                                        <option data-mobile_code="378" value="San Marino" data-code="SM">
                                                            San Marino</option>
                                                        <option data-mobile_code="239" value="Sao Tome and Principe" data-code="ST">
                                                            Sao Tome and Principe</option>
                                                        <option data-mobile_code="966" value="Saudi Arabia" data-code="SA">
                                                            Saudi Arabia</option>
                                                        <option data-mobile_code="221" value="Senegal" data-code="SN">
                                                            Senegal</option>
                                                        <option data-mobile_code="381" value="Serbia" data-code="RS">
                                                            Serbia</option>
                                                        <option data-mobile_code="248" value="Seychelles" data-code="SC">
                                                            Seychelles</option>
                                                        <option data-mobile_code="232" value="Sierra Leone" data-code="SL">
                                                            Sierra Leone</option>
                                                        <option data-mobile_code="65" value="Singapore" data-code="SG">
                                                            Singapore</option>
                                                        <option data-mobile_code="421" value="Slovakia" data-code="SK">
                                                            Slovakia</option>
                                                        <option data-mobile_code="386" value="Slovenia" data-code="SI">
                                                            Slovenia</option>
                                                        <option data-mobile_code="677" value="Solomon Islands" data-code="SB">
                                                            Solomon Islands</option>
                                                        <option data-mobile_code="252" value="Somalia" data-code="SO">
                                                            Somalia</option>
                                                        <option data-mobile_code="27" value="South Africa" data-code="ZA">
                                                            South Africa</option>
                                                        <option data-mobile_code="211" value="South Sudan" data-code="SS">
                                                            South Sudan</option>
                                                        <option data-mobile_code="500" value="South Georgia and the South Sandwich Islands" data-code="GS">
                                                            South Georgia and the South Sandwich Islands</option>
                                                        <option data-mobile_code="34" value="Spain" data-code="ES">
                                                            Spain</option>
                                                        <option data-mobile_code="94" value="Sri Lanka" data-code="LK">
                                                            Sri Lanka</option>
                                                        <option data-mobile_code="249" value="Sudan" data-code="SD">
                                                            Sudan</option>
                                                        <option data-mobile_code="597" value="Suricountry" data-code="SR">
                                                            Suricountry</option>
                                                        <option data-mobile_code="47" value="Svalbard and Jan Mayen" data-code="SJ">
                                                            Svalbard and Jan Mayen</option>
                                                        <option data-mobile_code="268" value="Swaziland" data-code="SZ">
                                                            Swaziland</option>
                                                        <option data-mobile_code="46" value="Sweden" data-code="SE">
                                                            Sweden</option>
                                                        <option data-mobile_code="41" value="Switzerland" data-code="CH">
                                                            Switzerland</option>
                                                        <option data-mobile_code="963" value="Syrian Arab Republic" data-code="SY">
                                                            Syrian Arab Republic</option>
                                                        <option data-mobile_code="886" value="Taiwan" data-code="TW">
                                                            Taiwan</option>
                                                        <option data-mobile_code="992" value="Tajikistan" data-code="TJ">
                                                            Tajikistan</option>
                                                        <option data-mobile_code="255" value="Tanzania" data-code="TZ">
                                                            Tanzania</option>
                                                        <option data-mobile_code="66" value="Thailand" data-code="TH">
                                                            Thailand</option>
                                                        <option data-mobile_code="670" value="Timor-Leste" data-code="TL">
                                                            Timor-Leste</option>
                                                        <option data-mobile_code="228" value="Togo" data-code="TG">
                                                            Togo</option>
                                                        <option data-mobile_code="690" value="Tokelau" data-code="TK">
                                                            Tokelau</option>
                                                        <option data-mobile_code="676" value="Tonga" data-code="TO">
                                                            Tonga</option>
                                                        <option data-mobile_code="1868" value="Trinidad and Tobago" data-code="TT">
                                                            Trinidad and Tobago</option>
                                                        <option data-mobile_code="216" value="Tunisia" data-code="TN">
                                                            Tunisia</option>
                                                        <option data-mobile_code="90" value="Turkey" data-code="TR">
                                                            Turkey</option>
                                                        <option data-mobile_code="993" value="Turkmenistan" data-code="TM">
                                                            Turkmenistan</option>
                                                        <option data-mobile_code="1649" value="Turks and Caicos Islands" data-code="TC">
                                                            Turks and Caicos Islands</option>
                                                        <option data-mobile_code="688" value="Tuvalu" data-code="TV">
                                                            Tuvalu</option>
                                                        <option data-mobile_code="256" value="Uganda" data-code="UG">
                                                            Uganda</option>
                                                        <option data-mobile_code="380" value="Ukraine" data-code="UA">
                                                            Ukraine</option>
                                                        <option data-mobile_code="971" value="United Arab Emirates" data-code="AE">
                                                            United Arab Emirates</option>
                                                        <option data-mobile_code="44" value="United Kingdom" data-code="GB">
                                                            United Kingdom</option>
                                                        <option data-mobile_code="1" value="United States" data-code="US">
                                                            United States</option>
                                                        <option data-mobile_code="598" value="Uruguay" data-code="UY">
                                                            Uruguay</option>
                                                        <option data-mobile_code="998" value="Uzbekistan" data-code="UZ">
                                                            Uzbekistan</option>
                                                        <option data-mobile_code="678" value="Vanuatu" data-code="VU">
                                                            Vanuatu</option>
                                                        <option data-mobile_code="58" value="Venezuela" data-code="VE">
                                                            Venezuela</option>
                                                        <option data-mobile_code="84" value="Vietnam" data-code="VN">
                                                            Vietnam</option>
                                                        <option data-mobile_code="1284" value="British Virgin Islands" data-code="VG">
                                                            British Virgin Islands</option>
                                                        <option data-mobile_code="1340" value="U.S. Virgin Islands" data-code="VI">
                                                            U.S. Virgin Islands</option>
                                                        <option data-mobile_code="681" value="Wallis and Futuna" data-code="WF">
                                                            Wallis and Futuna</option>
                                                        <option data-mobile_code="967" value="Yemen" data-code="YE">
                                                            Yemen</option>
                                                        <option data-mobile_code="260" value="Zambia" data-code="ZM">
                                                            Zambia</option>
                                                        <option data-mobile_code="263" value="Zimbabwe" data-code="ZW">
                                                            Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="uk-width-1-2@s uk-inline">
                                                    <span class="uk-form-icon">+88</span>
                                                    <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Phone No">
                                                </div>
                                                
                                                <div class="uk-width-1-2@s uk-inline">
                                                    <span class="uk-form-icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                                                    </svg></span>
                                                    <input class="uk-input uk-border-rounded" id="email" name="email" type="password" placeholder="Password">
                                                </div>
                                                <div class="uk-width-1-2@s uk-inline">
                                                    <span class="uk-form-icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                                                    </svg></span>
                                                    <input class="uk-input uk-border-rounded" id="email" name="email" type="password" placeholder="Confirm Password">
                                                </div>
                                                <div class="uk-margin-small uk-width-auto uk-text-small">
                                                    <label><input class="uk-checkbox uk-border-rounded" type="checkbox">
                                                        Remember me</label>
                                                </div>
                                                <div class="uk-margin-small uk-width-1-1">
                                                    <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit"
                                                        name="submit">Sign Up</button>
                                                </div>
                                            </form>
                                        </div>
                                    <!-- login form begin -->
                                    <!-- login form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    @include('partials.notify')
    <script src="{{ asset('assets/templates/trending/js/vendors/uikit.min.js')}}"></script>
    <script src="{{ asset('assets/templates/trending/js/vendors/indonez.min.js')}}"></script>
</body>

</html>