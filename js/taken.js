;(function($) { $(document).ready(function() {

  var infoToggle  = $('#info-toggle'),
      toggleEl    = $('header');
  
  infoToggle.click(function(e) {
    toggleEl.toggleClass('header-open');
    $(this).toggleClass('sp-i-icon-hover');
    e.preventDefault();  
  });

  var base        = 'http://api.flickr.com/services/rest/?method=',
      method      = 'flickr.photosets.getPhotos',
      apiKey      = 'abeba428501e6608de224840d0f58f4b',
      photoSetId  = '72157628441845673',
      format      = 'json',
      photoSize   = 'b',
      flickrUrl   = base + method + '&api_key=' + apiKey + '&photoset_id=' + photoSetId + '&extras=date_taken,url_l' + '&format=' + format + '&nojsoncallback=1',
      photos,
      photoContainer = $('#photo-container');

  function displayPhotos()
  {
    var photoUrl,
        html = '',
        date,
        img,
        actualDate;
    $.each(photos, function(index,photo) {
      photoUrl    = photo.url_l,
      date        = photo.datetaken.split('-'),
      actualDate  = date[2].split(' ')[0] + '.' + date[1] + '.' + date[0];

      html += '<div class="photo">';
        html += '<img src="' + photoUrl + '" />';
        html += '<div class="photo-info">';
          html += '<h2>' + photo.title + '</h2>';
          html += '<p class="date">' + actualDate + '</p>';
        html += '</div>';
      html += '</div>';
      photoContainer.append(html);
      html = '';
    });
  }

  function getPhotos()
  {
    $.ajax({
      url: flickrUrl,
      dataType: 'json',
      success: function(res) {
        if (res.stat == 'ok')
        {
          photos = res.photoset.photo;
          displayPhotos();
        }
      }
    });      
  }
  getPhotos();

  var setURL = base + "flickr.photosets.getList" + '&api_key=' + apiKey + '&user_id=' + '36743895@N03' + '&page=1&per_page=3&format=' + format + '&nojsoncallback=1',
      sets,
      setContainer = $('#sets');

  function getSets()
  {
    $.ajax({
      url: setURL,
      dataType: 'json',
      success: function(res) {
        if (res.stat == 'ok')
        {
          sets = res.photosets.photoset;
          displaySets();
        }
      }
    });
  }
  getSets();

  function displaySets()
  {
    var photoUrl, html = '';

    $.each(sets, function(index, set) {
      photoUrl ='http://farm' + set.farm + '.staticflickr.com/' + set.server + '/' + set.primary + '_' + set.secret + '_s.jpg';
      html += '<div class="set-cell"><a href="http://www.flickr.com/photos/nouveller/sets/'+set.id+'"><img src="' + photoUrl + '" width="75" height="75" /></a></div>';
    });
    setContainer.prepend(html);
  }

}); })(jQuery);