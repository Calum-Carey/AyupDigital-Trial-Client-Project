// Import lodash
import _ from 'lodash';

var btnExpand = document.getElementById('js-btn-expand');

btnExpand.addEventListener('click', toggleExpand);

function toggleExpand(e) {

    var contentExpand = document.getElementById("js-content-expand");
    if (contentExpand.style.display === "block") {
        contentExpand.style.display = "none";
        btnExpand.innerHTML = 'Show more';
    } else {
        contentExpand.style.display = "block";
        btnExpand.innerHTML = 'Show less';

    }
}
