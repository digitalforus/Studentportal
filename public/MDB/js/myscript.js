
function popup(elnt) {
   elnt.style.display = 'block';
}


function showPopup(elnt)
    $("studentUpdate").load(function(){
        if($srrors.count > 0){
            $("edit-student-password").show();
        }
    });
}