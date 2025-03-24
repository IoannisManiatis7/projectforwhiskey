(function waitForConsent() {
    if (typeof window.__tcfapi === 'undefined') {
      // Wait for the CMP to be ready
      setTimeout(waitForConsent, 100);
      return;
    }
  
    // Listen for user consent
    window.__tcfapi('addEventListener', 2, function(tcData, success) {
      if (success && (tcData.eventStatus === 'useractioncomplete' || tcData.eventStatus === 'tcloaded')) {
        const hasPurposeOneConsent = tcData.purpose.consents['1']; // Purpose 1: Storage & Access
  
        if (hasPurposeOneConsent) {
          // User accepted cookies, load the scripts
          loadCmpScripts();
        }
      }
    });
  })();
  
  // Function to load scripts with data-cmp-script
  function loadCmpScripts() {
    const cmpScripts = document.querySelectorAll('script[data-cmp-script]');
    cmpScripts.forEach((script) => {
      const src = script.getAttribute('data-src');
      if (src) {
        // For external scripts, set the src attribute
        script.setAttribute('src', src);
      }
  
      // Handle inline script content
      if (script.text) {
        const newScript = document.createElement('script');
        newScript.text = script.text;
        document.body.appendChild(newScript);
        script.remove();
      }
    });
  }
  