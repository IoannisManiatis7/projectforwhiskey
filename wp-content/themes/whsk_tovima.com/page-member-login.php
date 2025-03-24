<?php 
//NEW
// http://ariadni.alteregomedia.org/WebServices/AuthorizeUserLogin.asmx/LoginUser?username=xkalo&password=xkaloxkalo
if(isset($_POST['getauth'])) {
  $getjson = file_get_contents("http://ariadni.alteregomedia.org/WebServices/AuthorizeUserLogin.asmx/LoginUser?username=".$_POST['form_user']."&password=".$_POST['form_pass']."&site=tovima");
  $jsonauth =  json_decode($getjson);
    if( empty($jsonauth) ){ echo 'WRONGPASS'; } else {
      $get = $jsonauth[0];
      unset($jsonauth[0]);
      $rete = array(
        'AuthID' => $get,
        'username' => $_POST['form_user'],
        'premiumAids' => $jsonauth
      );
      echo json_encode($rete);
    }
  } else {
  get_header();
?>

<div class="minigridrow">
<div class="wrap-member-cols">
  <div class="columns is-multiline is-variable">

<?php if(strpos($_SERVER['REQUEST_URI'], 'failed')): ?>
<div class="column is-full">
<div class="error-msg">Τα στοιχεία σύνδεσης είναι λάθος. Προσπαθήστε ξανά!</div>
</div>
<?php endif; ?>  

<div class="column is-half br is-relative">
  <div class="col-item">
  <h3 class="zonabold loginform-header notblack-c">Συνδεθείτε</h3>
  <div id="loginform">
    <p class="login-username">
    <label for="user_login">Όνομα χρήστη / Email</label>
    <input type="text" name="log" id="user_login" class="input" size="20" required>
    </p>
    <p class="login-password">
    <label for="user_pass">Κωδικός χρήστη</label>
    <input type="password" name="pwd" id="user_pass" class="input" size="20" required>
    </p>
    <p class="login-submit my-0">
    <button onclick="loginButtton()">Σύνδεση</button>
    </p>
    </div>
  </div>
</div>
<div class="column is-half is-relative">
  <div class="col-item">  
  <h3 class="zonabold loginform-header notblack-c">Κάντε εγγραφή</h3>  
  <p class="is-size-normal normalgrey-c">
    Αν θέλετε να δείτε την πλήρη έκδοση θα πρέπει να είστε συνδρομητής. Αποκτήστε σήμερα μία συνδρομή κάνοντας κλικ εδώ:
  </p>
  <a rel="nofollow" href="https://www.helioskiosk.gr/register" target="_blank" title="Register" class="register-member">
  Εγγραφή
  </a>    
  </div>
</div>
    
<div class="column is-full">
  <div id="statuslog" class="manrope f-700 is-size-5 has-text-centered"></div>  
</div>
  
</div>
</div>
</div>

<div class="maxgridrow" style="border-top:1px solid #ddd">
<div class="minigridrow">
<div class="loginform-footer">
  <p class="is-size-5 normalgrey-c copyright-name">
    © ΑΛΤΕΡ ΕΓΚΟ Α.Ε.
  </p>
  <p class="is-size-normal normalgrey-c">
   Το σύνολο του περιεχομένου και των υπηρεσιών του site διατίθεται στους επισκέπτες αυστηρά για προσωπική χρήση. Απαγορεύεται η χρήση ή επανεκπομπή του, σε οποιοδήποτε μέσο, μετά ή άνευ επεξεργασίας, χωρίς γραπτή άδεια του εκδότη. 
  </p>  
</div>
</div>
</div>

<script>
function loginButtton() {
document.getElementById('statuslog').innerHTML = "";
var form_user = document.getElementById('user_login').value;
var form_pass = document.getElementById('user_pass').value;

if(form_user != "" && form_pass !=""){

var hr = new XMLHttpRequest();
var url = "/member-login/";
var vars;
vars = "form_user=" + form_user;
vars += "&form_pass=" + form_pass;
vars += "&getauth=yes";
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
hr.onreadystatechange = function() {
if (hr.readyState == 4 && hr.status == 200) {
var resp = hr.responseText;
if (resp == "WRONGPASS") {
document.getElementById('statuslog').innerHTML = "<p>Το Όνομα χρήστη / Email ή ο Κωδικός χρήστη είναι λάθος.</p><p>Παρακαλώ δοκιμάστε ξανά.</p>";
} else {
var obj = JSON.parse(resp);
var myDate = new Date();
myDate.setMonth(myDate.getMonth() + 12);
let premio = JSON.stringify();
var result = Object.keys(obj.premiumAids).map(function(key) {
return obj.premiumAids[key];
});
document.cookie = "tanea.sso="+obj.AuthID+";expires="+ myDate +";path=/";
document.cookie = "premiumAids="+result+";expires="+ myDate +";path=/";
document.cookie = "premiumAids_name="+obj.username+";expires="+ myDate +";path=/";
document.cookie = "user_email=" + obj.username + ";expires=" + myDate + ";path=/";
window.location = "<?php echo (isset($_POST['login_url'])) ? $_POST['login_url'] : "/"; ?>";
}
}
}
hr.send(vars);
document.getElementById('statuslog').innerHTML = "<p>Παρακαλώ περιμένετε...</p>";
}
}
                    </script>


<?php get_footer();?>

<?php } ?>