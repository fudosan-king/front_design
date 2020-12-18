var _lat;
var _lng;
var _zoom = 13;
var markers = [];
var marker_old;
var infowindow_old;
var flag_dragend;
var _center;

(function() {
  function createMarker(lat_, lng_, icon, arr_estates) {
    var myLatLng = new google.maps.LatLng(lat_, lng_);
    var myMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: {url: icon}
    });
    str = '<div class="info-title">物件「' + arr_estates.length + '」</div>';
    for (var i = 0; i < arr_estates.length; i++) {
      if (i != arr_estates.length - 1) {
        str += '<a href="/estates/' + arr_estates[i]['_id']['$oid'] + '">' + arr_estates[i]['estate_name'] + '</a><hr>';
      }else{
        str += '<a href="/estates/' + arr_estates[i]['_id']['$oid'] + '">' + arr_estates[i]['estate_name'] + '</a>';
      }
    }
    var infowindow = new google.maps.InfoWindow({
        content: str
    });

    google.maps.event.addListener(myMarker, 'click', function() {
      if (infowindow_old) {
        infowindow_old.close(); // close infowindow
      }
      if (marker_old) {
        resetMarker(marker_old, icon_old); // reset marker_old
      }
      infowindow_old = infowindow;
      infowindow.open(map, myMarker);

      marker_old = myMarker; // save marker
      icon_old = myMarker.getIcon(); // set current icon --> icon_old
      myMarker.setIcon("/static/img/map/house_maker_click_36x36.png");

    });
    markers.push(myMarker);
  }

  function create_marker_by_object(lat_, lng_, icon, object) {
    var myLatLng = new google.maps.LatLng(lat_, lng_);
    var myMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: {url: icon}
    });
    str = '<div class="info-title">「' + '物件' + '」</div>';
    str += '<a href="/estates/' + object['estate_id'] + '">' + object['estate_name'] + '</a>';
    var infowindow = new google.maps.InfoWindow({
        content: str
    });

    google.maps.event.addListener(myMarker, 'click', function() {
      if (infowindow_old) {
        infowindow_old.close(); // close infowindow
      }
      if (marker_old) {
        resetMarker(marker_old, icon_old); // reset marker_old
      }
      infowindow_old = infowindow;
      infowindow.open(map, myMarker);

      marker_old = myMarker; // save marker
      icon_old = myMarker.getIcon(); // set current icon --> icon_old
      myMarker.setIcon("/static/img/map/house_make_click_36x36.png");
    });
    markers.push(myMarker);
  }

  function resetMarker (marker, icon) {
    marker.setIcon(icon);
  }

  function resetData () {
    flag_dragend = true;
    $('#estates').empty();
  }

  function serializeData (data) {
    $form = $('#formdata');
    if ($form) {
      data = $form.serialize();
    }
    return data;
  }

  function deleteMarkers() {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(null);
    }
    markers = [];
  }

  function searchEstate (lat_, lng_) {
    $('.map_info').addClass('loading');
    deleteMarkers();
    var data = '';

    data = serializeData(data);

    _lat = lat_;
    _lng = lng_;
    _zoom = map.getZoom();
    if (_zoom < 12 || _zoom > 20) {
      _zoom = 13;
    }

    data = data.replace('latitude', 'old_lat');
    data += '&latitude=' + lat_;
    data = data.replace('longitude', 'old_lng');
    data += '&longitude=' + lng_;
    data += '&zoom=' + _zoom;

    $.ajax({
      url: "/search/map/" + lat_ + '/' + lng_,
      type: 'GET',
      data: data,
      timeout: 15000
    }).success(function(data) {
      if (data.estates.length <= 0) {
        alert("指定の条件に該当する物件は、0件でした。");
      }else{
        for (var idx = 0; idx < data.estates.length; idx++) {
          es = data.estates[idx];
          arr_estates = data.total[idx];
          icon = '/static/img/map/house_maker_' + arr_estates.length + '_36x36.png';
          createMarker(es['latitude'], es['longitude'], icon, arr_estates);
        }
      }

      $('.map_info').removeClass('loading');
    }).error(function () {
      alert("指定の条件に該当する物件は、0件でした。");
      $('.map_info').removeClass('loading');
    });
  }

  function setCenterMarker (lat, lng) {
    if (_center) {
      _center.setMap(null);
    }
    var centerLatLng = new google.maps.LatLng(lat, lng);
    var centerMarker = new google.maps.Marker({
      position: centerLatLng,
      map: map,
      icon: {url: '/static/img/map/center-point-32x32.png'}
    });
    _center = centerMarker;
    map.setCenter(centerLatLng);
  }

  var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  };

  function success(pos) {
    var crd = pos.coords;
  }

  function error(err) {
    console.warn('ERROR(' + err.code + '): ' + err.message);
  }

  var map;
  var mapOptions = {
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('my-canvas'), mapOptions);

  google.maps.event.addListener(map, 'idle', function() {
    var center = map.getCenter() ? map.getCenter() : new google.maps.LatLng(0, 0);
    setCenterMarker(center.lat(), center.lng());
  });

  /* search with latitude and longitude or location */
  if ($('#latitude').val() && $('#longitude').val()) {
    _lat = $('#latitude').val();
    _lng = $('#longitude').val();
    var myLatLng = new google.maps.LatLng(_lat, _lng);
    map.setCenter(myLatLng);
    $('#estates').find('.sub_estate').each(function () {
      var es = {};
      es['estate_id'] = $(this).find('#estate_id').val();
      es['estate_name'] = $(this).find('#estate_name').val();
      es['estate_lat'] = $(this).find('#estate_lat').val();
      es['estate_lng'] = $(this).find('#estate_lng').val();
      icon = '/static/img/map/house_maker_1_36x36.png';
      create_marker_by_object(es['estate_lat'], es['estate_lng'], icon, es);
    });
  }
  else {
    navigator.geolocation.getCurrentPosition(success, error, options);
    if(!!navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        _lat = position.coords.latitude;
        _lng = position.coords.longitude;
        setCenterMarker(_lat, _lng);

        var myIcon = '/static/img/map/point.png';
        var myLatLng = new google.maps.LatLng(_lat, _lng);
        var myMarker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: {url: myIcon}
        });

        var infowindow = new google.maps.InfoWindow({
            content: 'This is your location!!!<br>' + 'Latitude: ' + _lat + '<br>' + 'Longitude: ' + _lng
        });

        google.maps.event.addListener(myMarker, 'click', function() {
          infowindow.open(map, myMarker);
        });
        searchEstate(_lat, _lng);
      });
    } else {
      document.getElementById('my-canvas').innerHTML = 'No Geolocation Support.';
    }
  }
  /* end */

  $('#tab_list_estates').on('click', function () {
    if (flag_dragend) {
      $('.map_info').addClass('loading');
      $("#lst_estates").empty();
      var data = '';

      data = serializeData(data);

      data = data.replace('latitude', 'old_lat');
      data += '&latitude=' + _lat;
      data = data.replace('longitude', 'old_lng');
      data += '&longitude=' + _lng;
      data += '&zoom=' + _zoom;


      serializeData(data);
      $.ajax({
        url: "/search/map/list",
        type: 'GET',
        data: data
      }).success(function(data) {
        $("#lst_estates").append(data);
        $('.map_info').removeClass('loading');
      }).error(function () {
        $('.map_info').removeClass('loading');
      });
    }
  });

  $('#action_search').on('click', function () {
    resetData();
    center = map.getCenter();
    searchEstate(center.lat(), center.lng());
  });

  $('#btn_search_filters').on('click', function () {
    var href = $(this).data('href');
    var flag = $('#flag').val();
    var center = map.getCenter();
    setTimeout(function(){
      if (flag == 1) {
        location.href = href + '&new_lat=' + center.lat() + '&new_lng=' + center.lng();
      } else{
        location.href = href + '?new_lat=' + center.lat() + '&new_lng=' + center.lng();
      }
    }, 500);
  });

})();
