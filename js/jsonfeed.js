function listposts(data) {
var output='<ul data-role="listview">';
$.each(data.posts,function(key,val) {
output +='<li>';
output +='<a href="#blogpost"onclick="showPost(' + val.id + ')" data-transition="slide">';
output +='<h3>'  + val.title + '</h3>';
output +=  (val.thumbnail) ?
'<img src="' + val.thumbnail + '" alt="' + val.title + '"/>':'';

output +='<p>' + val.excerpt + '</p>';
output +='<a>';
output +='</li>';
});
output+='</ul>';
$('#postslist').html(output);

}

function showPost(id) {
	$.getJSON('http://wp:8887/mobile_theme/wordpress/?json=get_post&post_id=' + id + '&callback=?' ,
		function(data) {
			var output='';
			output += '<h3>' + data.post.title + '<h3>';
			output += data.post.content;
			$('#mypost').html(output);

		});
}

function dosomething (data) {
console.log(data);
}