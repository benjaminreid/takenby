class Flickr
	constructor: () ->
		@base 				= 'http://api.flickr.com/services/rest/?method='
		@method 			= 'flickr.photosets.getPhotos'
		@format 			= 'json'
		@apiKey 			= TAKEN.apiKey
		@username 		= TAKEN.username
		@userId 			= TAKEN.userId
		@photoSetId 	= TAKEN.photoSetId
		@url = "#{@base}#{@method}&api_key=#{@apiKey}&photoset_id=#{@photoSetId}&extras=date_taken,url_l&format=#{@format}&nojsoncallback=1"

	getPhotos: (cb) ->
		$.ajax
			url: @url
			dataType: 'json'
			success: (res) ->
				cb res if res.stat == 'ok'