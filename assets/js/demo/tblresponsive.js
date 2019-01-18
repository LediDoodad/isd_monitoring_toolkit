/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 4.2.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.2/admin/
*/
var handleDataTableResponsive = function() {
  "use strict";
  if ($("#myadmin").length !== 0) {
    $("#myadmin").DataTable({
      responsive: true
    })
  }
};
var TableManageResponsive = function() {
  "use strict";
  return {
    init: function() {
      handleDataTableResponsive()
    }
  }
}()