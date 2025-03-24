<?php
  
function isbreaking_info_box() { add_meta_box( 'isbreaking_info_box', 'Μέτρημα Λέξεων', 'isbreaking_info_box_html', 'post', 'side', 'high' ); }

add_action('add_meta_boxes', 'isbreaking_info_box');
function isbreaking_info_box_html($post) { $post_id = $post->ID; ?>
  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      
      const submitBtn =  document.querySelector('#submitdiv #publishing-action .button');
      submitBtn.disabled = true;
      
      
      
      const submitInfo = document.querySelector('#submitdiv #minor-publishing');
      const counterInfoBox = document.createElement("div");
      counterInfoBox.setAttribute('id', 'publish-counter-info');
      
      const counterInfoBox_1 = document.createElement("span");
      counterInfoBox_1.setAttribute('id', 'publish-counter-info-label');
      counterInfoBox_1.innerHTML = "Αριθμός Λέξεων";
      counterInfoBox.appendChild(counterInfoBox_1);
      
      const counterInfoBox_2 = document.createElement("span");
      counterInfoBox_2.setAttribute('id', 'publish-counter-info-number');
      counterInfoBox_2.innerHTML = "0";
      counterInfoBox.appendChild(counterInfoBox_2);
      
      const counterInfoBox_3 = document.createElement("span");
      counterInfoBox_3.setAttribute('onclick', 'syncCounter()');
      counterInfoBox_3.classList.add('publish-syn-btn')
      counterInfoBox_3.innerHTML = "Συγχρονίσμος";
      counterInfoBox.appendChild(counterInfoBox_3);
      

      const counterIsBreakDiv = document.createElement("div");
      counterIsBreakDiv.style.marginTop = "10px"
      counterIsBreakDiv.setAttribute('id', 'publish-isbreak-main');
      
      const counterIsBreakDiv_2 = document.createElement("input");
      counterIsBreakDiv_2.setAttribute('type', 'checkbox');
      counterIsBreakDiv_2.setAttribute('onclick', 'checkIfIsBreak(this)');
      counterIsBreakDiv.appendChild(counterIsBreakDiv_2);
      
      const counterIsBreakDiv_1 = document.createElement("span");
      counterIsBreakDiv_1.innerHTML = "Είναι Εκτακτό;";
      counterIsBreakDiv.appendChild(counterIsBreakDiv_1);
      
      counterInfoBox.appendChild(counterIsBreakDiv);
      
      
        setTimeout(function() {
          tinymce.editors.content.on('change', function(e) { syncCounter(); });
        }, 1000);
        submitInfo.appendChild(counterInfoBox);
      
//       setTimeout(function() {
//         setInterval(function() { syncCounter(); }, 1000);
//         submitInfo.appendChild(counterInfoBox);
//       });
      
    });
    
    function checkIfIsBreak(e){
        const submitBtna =  document.querySelector('#submitdiv #publishing-action .button');
        if(e.checked){ submitBtna.disabled = false; } else { submitBtna.disabled = true; }
      }
    
     function syncCounter(){
        const submitBtn =  document.querySelector('#submitdiv #publishing-action .button');
        const getcount =  parseInt( document.querySelector('#post-status-info .word-count').innerHTML);
        document.querySelector('#publish-counter-info-number').innerHTML = getcount
        if ( getcount > 101) { submitBtn.disabled = false; } else { submitBtn.disabled = true; }
      }
    
    
  </script>
  <style>
    #publish-counter-info { padding: 5px 10px 10px; }
    #publish-counter-info-label { font-weight: 500; margin-right: 5px; }
    #isbreaking_info_box {display: none; }

    
.publish-syn-btn {
    color: #2271b1;
    border-color: #2271b1;
    background: #f6f7f7;
    vertical-align: top;
    padding: 10px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    border-radius: 3px;
    margin-left: 10px;
}

.publish-syn-btn:hover{
    background: #f0f0f1;
    border-color: #0a4b78;
    color: #0a4b78;
}    
  </style>

<?php }