
  <section class="reservation-information mb-5">
    <div class="spacer reserve-info mb-5" id="information">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-md-12">
            <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
              <iframe allowfullscreen class="embed-responsive-item" frameborder="0" height="400" src="//player.vimeo.com/video/55057393?title=0" width="100%"></iframe>
            </div>
          </div>
    </div>
  </section> --}}
  {{-- <div id="map"></div>
  {{-- <!DOCTYPE html>
<html>
  <head>
    <title>Custom Controls</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      let map;
      const chicago = { lat: 41.85, lng: -87.65 };

      /**
       * The CenterControl adds a control to the map that recenters the map on
       * Chicago.
       * This constructor takes the control DIV as an argument.
       * @constructor
       */
      function CenterControl(controlDiv, map) {
        // Set CSS for the control border.
        const controlUI = document.createElement("div");
        controlUI.style.backgroundColor = "#fff";
        controlUI.style.border = "2px solid #fff";
        controlUI.style.borderRadius = "3px";
        controlUI.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
        controlUI.style.cursor = "pointer";
        controlUI.style.marginBottom = "22px";
        controlUI.style.textAlign = "center";
        controlUI.title = "Click to recenter the map";
        controlDiv.appendChild(controlUI);
        // Set CSS for the control interior.
        const controlText = document.createElement("div");
        controlText.style.color = "rgb(25,25,25)";
        controlText.style.fontFamily = "Roboto,Arial,sans-serif";
        controlText.style.fontSize = "16px";
        controlText.style.lineHeight = "38px";
        controlText.style.paddingLeft = "5px";
        controlText.style.paddingRight = "5px";
        controlText.innerHTML = "Center Map";
        controlUI.appendChild(controlText);
        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener("click", () => {
          map.setCenter(chicago);
        });
      }

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: chicago,
        });
        // Create the DIV to hold the control and call the CenterControl()
        // constructor passing in this DIV.
        const centerControlDiv = document.createElement("div");
        CenterControl(centerControlDiv, map);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          centerControlDiv
        );
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html> --}}
