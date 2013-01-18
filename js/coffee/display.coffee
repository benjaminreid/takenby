class Display
	constructor: ->
		@elements =
			photos: $('#photo-container')
			sets: $('#sets')

		@photoTemplate = '
<div class="photo">
	<img src="<%= src %>">
	<div class="photo-info">
		<h2><%= title %></h2>
		<p class="date"><%= date %></p>
	</div>
</div>'

		@flickr = new Flickr
		@init()

	init: ->
		self = @
		@flickr.photos (res) ->
			html = ''

			build = (photo) ->
				url 				= photo.url_l
				date 				= photo.datetaken.split '-'
				humanDate 	= date[2].split(' ')[0] + '.' + date[1] + '.' + date[0]

				data =
					src: url
					date: humanDate
					title: photo.title

				html += _.template self.photoTemplate, data
			build photo for photo in res.photoset.photo
			self.elements.photos.append html