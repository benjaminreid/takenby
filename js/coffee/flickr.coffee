class Flickr
	constructor: () ->
		@base 				= 'http://api.flickr.com/services/rest/?method='
		@method 			= 'flickr.photosets.getPhotos'
		@sMethod 			= 'flickr.photosets.getList'
		@format 			= 'json'
		@apiKey 			= TAKEN.apiKey
		@username 		= TAKEN.username
		@userId 			= TAKEN.userId
		@photoSetId 	= TAKEN.photoSetId
		
		@photosURL = "#{@base}#{@method}&api_key=#{@apiKey}&photoset_id=#{@photoSetId}&extras=date_taken,url_l&format=#{@format}&nojsoncallback=1"
		@setURL = "#{@base}#{@sMethod}&api_key=#{@apiKey}&user_id=#{@userId}&page=1&per_page=3&format=#{@format}&nojsoncallback=1"

	get: (cb, url) ->
		$.ajax
			url: url
			type: 'GET'
			dataType: 'json'
			success: (res) ->
				cb res if res.stat == 'ok'
			error: (e) ->
				console.log 'error', e, url

	photos: (cb) -> @get cb, @photosURL

	sets: (cb) -> @get cb, @setURL