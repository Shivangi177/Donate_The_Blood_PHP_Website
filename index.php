<?php
include 'include/header.php';
?>

<!-- header start  -->
<div class="container-fluid header-img">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="header">
                <h1 class="text-center">Donate the blood,Save the life</h1>
                <p class="text-center">Donate the blood to help the others</p>
            </div>

            <h1 class="text-center">Search the Donors</h1>
            <hr class="white-bar text-center">

            <form action="search.php" method="get" class="form-inline text-center" style="padding:40px 0px 0px 5px;">

                <div class="form-group text-center justify-content-center">
                  <select name="city" id="city" class="form-control demo-default" style="width:220px; height:45px;" required>

                    	<option value="">-- Select --</option>
                        <optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup>
                        <option value="Bagh" >Bagh</option>
                        <option value="Bhimber" >Bhimber</option>
                        <option value="Kotli" >Kotli</option>
                        <option value="Mirpur" >Mirpur</option>
                        <option value="Muzaffarabad" >Muzaffarabad</option>
                        <option value="Neelum" >Neelum</option>
                        <option value="Poonch" >Poonch</option>
                        <option value="Sudhnati" >Sudhnati</option>
                        <optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup>
                        <option value="Awaran" >Awaran</option>
                        <option value="Barkhan" >Barkhan</option>
                        <option value="Bolan" >Bolan</option>
                        <option value="Chagai" >Chagai</option>
                        <option value="Dera Bugti" >Dera Bugti</option>
                        <option value="Gwadar" >Gwadar</option>
                        <option value="Jafarabad" >Jafarabad</option>
                        <option value="Jhal Magsi" >Jhal Magsi</option>
                        <option value="Kalat" >Kalat</option>
                        <option value="Kech" >Kech</option>
                        <option value="Kharan" >Kharan</option>
                        <option value="Khuzdar" >Khuzdar</option>
                        <option value="Kohlu" >Kohlu</option>
                        <option value="Lasbela" >Lasbela</option>
                        <option value="Loralai" >Loralai</option>
                        <option value="Mastung" >Mastung</option>
                        <option value="Musakhel" >Musakhel</option>
                        <option value="Naseerabad" >Naseerabad</option>
                        <option value="Nushki" >Nushki</option>
                        <option value="Panjgur" >Panjgur</option>
                        <option value="Pishin" >Pishin</option>
                        <option value="Qilla Abdullah" >Qilla Abdullah</option>
                        <option value="Qilla Saifullah" >Qilla Saifullah</option>
                        <option value="Quetta" >Quetta</option>
                        <option value="Sibi" >Sibi</option>
                        <option value="Zhob" >Zhob</option>
                        <option value="Ziarat" >Ziarat</option>
                        <optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup>
                        <option value="Bajaur Agency" >Bajaur Agency</option>
                        <option value="Khyber Agency" >Khyber Agency</option>
                        <option value="Kurram Agency" >Kurram Agency</option>
                        <option value="Mohmand Agency" >Mohmand Agency</option>
                        <option value="North Waziristan Agency" >North Waziristan Agency</option>
                        <option value="Orakzai Agency" >Orakzai Agency</option>
                        <option value="South Waziristan Agency" >South Waziristan Agency</option>
                        
                        <optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup>
                        <option value="Islamabad" >Islamabad</option>
                        
                        <optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup>
                        <option value="Abbottabad" >Abbottabad</option>
                        <option value="Bannu" >Bannu</option>
                        <option value="Batagram" >Batagram</option>
                        <option value="Buner" >Buner</option>
                        <option value="Charsadda" >Charsadda</option>
                        <option value="Chitral" >Chitral</option>
                        <option value="Dera Ismail Khan" >Dera Ismail Khan</option>
                        <option value="Dir Lower" >Dir Lower</option>
                        <option value="Dir Upper" >Dir Upper</option>
                        <option value="Hangu" >Hangu</option>
                        <option value="Haripur" >Haripur</option>
                        <option value="Karak" >Karak</option>
                        <option value="Kohat" >Kohat</option>
                        <option value="Kohistan" >Kohistan</option>
                        <option value="Lakki Marwat" >Lakki Marwat</option>
                        <option value="Malakand" >Malakand</option>
                        <option value="Mansehra" >Mansehra</option>
                        <option value="Mardan" >Mardan</option>
                        <option value="Nowshera" >Nowshera</option>
                        <option value="Peshawar" >Peshawar</option>
                        <option value="Shangla" >Shangla</option>
                        <option value="Swabi" >Swabi</option>
                        <option value="Swat" >Swat</option>
                        <option value="Tank" >Tank</option>

                        <optgroup title="Punjab" label="&raquo; Punjab"></optgroup>
                        <option value="Alipur" >Alipur</option>
                        <option value="Attock" >Attock</option>
                        <option value="Bahawalnagar" >Bahawalnagar</option>
                        <option value="Bahawalpur" >Bahawalpur</option>
                        <option value="Bhakkar" >Bhakkar</option>
                        <option value="Chakwal" >Chakwal</option>
                        <option value="Chiniot" >Chiniot</option>
                        <option value="Dera Ghazi Khan" >Dera Ghazi Khan</option>
                        <option value="Faisalabad" >Faisalabad</option>
                        <option value="Gujranwala" >Gujranwala</option>
                        <option value="Gujrat" >Gujrat</option>
                        <option value="Hafizabad" >Hafizabad</option>
                        <option value="Jhang" >Jhang</option>
                        <option value="Jhelum" >Jhelum</option>
                        <option value="Kasur" >Kasur</option>
                        <option value="Khanewal" >Khanewal</option>
                        <option value="Khushab" >Khushab</option>
                        <option value="Lahore" >Lahore</option>
                        <option value="Layyah" >Layyah</option>
                        <option value="Lodhran" >Lodhran</option>
                        <option value="Mandi Bahauddin" >Mandi Bahauddin</option>
                        <option value="Mianwali" >Mianwali</option>
                        <option value="Multan" >Multan</option>
                        <option value="Muzaffargarh" >Muzaffargarh</option>
                        <option value="Nankana Sahib" >Nankana Sahib</option>
                        <option value="Narowal" >Narowal</option>
                        <option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
                    </select>
                </div>

                <div class="form-group center-aligned">
                    <select name="blood_group" id="blood_group" class="form-control demo-default text-center margin10px" stule="padding:0 20px; width:220px; height:45px;">
                           <option value="A+">A+</option>
                           <option value="A-">A-</option>
                           <option value="B+">B+</option>
                           <option value="B-">B-</option>
                           <option value="AB+">AB+</option>
                           <option value="AB-">AB-</option>
                           <option value="O+">O+</option>
                           <option value="O-">O-</option>
                    </select>
                </div>
                <div class="form-group center-aligned">
                    <button class="btn brn-lg btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- header end  -->

<!-- Donate section  -->
 <div class="container-fluid red-background">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="color:white; font-weight:700px; padding:10px 0 0 0;">Donate The Blood</h1>
            <hr class="white-bar">
            <p class="text-center para-text" style="color:black;">
            Donating blood is one of the greatest ways to help humankind. By doing so, we save someone's precious life, and that is a blessing in itself. There are people who hesitate to donate blood if they are not given monetary returns or because of the various myths surrounding it.
            </p>
            <a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
        </div>
    </div>
 </div>
<!-- Donate section end  -->

<!-- About us section card  -->
 <div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Vission</h3>
                <img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                <p class="text-center">
                Blood donation is a noble act that saves countless lives every day. 
                By donating blood, individuals contribute to the well-being of
                others and play a vital role in healthcare systems worldwide.
                </p>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Goal</h3>
                <img src="img/target.png" alt="Our Goal" class="img img-responsive" width="168" height="168">
                <p class="text-center">
                Donating is a generous thing to do. It helps people in need,
                 and it helps people in your community. When you give, others 
                 live. Donors, especially those who donate regularly, keep our
                nation's blood supply stable. 
                </p>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <h3 class="text-center red">Our Mission</h3>
                <img src="img/goal.png" alt="Our Mission" class="img img-responsive" width="168" height="168">
                <p class="text-center">
                Blood donations in India are conducted by organisations and
                hospitals through blood donation camps. Efforts by the 
                government and advocacy groups over the years have helped
                bridge the gap between demand and supply. .
                </p>
            </div>
        </div>

    </div>
 </div>

 <!-- About us Section ends -->

<?php
//include footer file
include 'include/footer.php';
?>