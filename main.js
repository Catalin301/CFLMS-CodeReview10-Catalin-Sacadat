let id = $("input[name*='Media_ID']")
id.attr("readonly","readonly");
$(".btnedit").click(e=>{
	
 let textvalues=displayData(e);
	
	;
	let m_title = $("input[name*='title']");
	let m_image = $("input[name*='image']");
	let m_isbn = $("input[name*='ISBN']");
	let m_shortd = $("input[name*='short_description']");
	let m_author = $("input[name*='author']");
	let m_publisher = $("input[name*='publisher']");
	let m_pubdate = $("input[name*='publish_date']");
	let m_type = $("input[name*='type']");

	id.val(textvalues[0]);
	m_title.val(textvalues[1]);
	m_image.val(textvalues[2]);
	m_isbn.val(textvalues[3]);
	m_shortd.val(textvalues[4]);
	m_author.val(textvalues[5]);
	m_publisher.val(textvalues[6]);
	m_pubdate.val(textvalues[7]);
	m_type.val(textvalues[8]);
});


function displayData(e) {
	
	let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
       if(value.dataset.id==e.target.dataset.id){
       	textvalues[id++]=value.textContent;
       }
 
	}
	return textvalues;
}