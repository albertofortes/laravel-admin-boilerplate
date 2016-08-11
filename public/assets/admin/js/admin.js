$(function() {

  /**
  * Modal to remove user
  */
  $(document).on("click", ".open-remove-user-dialog", function () {
     var userId = $(this).data('id');
     $("#removeUserButton").attr( 'href', '/delete/' . userId );
     $("#removeUserActions").prepend("<a href='/admin/users/delete/" + userId + "' class='btn btn-danger'>Eliminar</a>");
  });

});
