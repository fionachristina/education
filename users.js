function setUpdateAction() {
document.frmUser.action = "edit_tutor.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "deletetutor.php";
document.frmUser.submit();
}
}