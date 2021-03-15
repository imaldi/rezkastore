(function ($) {
  $.fn.inputFilter = function (inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));

$(".number-input").inputFilter(function (value) {
  return /^-?\d*$/.test(value);
});

$(document).on('input propertychange paste', '.input-notzero', function (e) {
  var val = $(this).val()
  var reg = /^0/gi;
  if (val.match(reg)) {
    $(this).val(val.replace(reg, ''));
  }
});

$(function () {
  $("form[name='transaction_form']").validate({
    rules: {
      diskon: "required",
      bayar: "required"
    },
    errorPlacement: function (error, element) {
      var name = element.attr("name");
      $('input[name=' + name + ']').addClass('is-invalid');
    },
    submitHandler: function (form) {
      form.submit();
    }
  });
});


function subtotalBarang() {
  var subtotal_barang = 0;
  $('.total_barang').each(function () {
    subtotal_barang += parseInt($(this).val());
  });
  $('.nilai-subtotal1-td').html('Rp. ' + parseInt(subtotal_barang).toLocaleString());
  $('.nilai-subtotal2-td').val(subtotal_barang);
}

function diskonBarang() {
  var subtotal = parseInt($('input[name=subtotal]').val());
 //var diskon = parseInt($('input[name=diskon]').val());
  var diskon = parseInt($('.nilai-diskon-td').text());
  var total = subtotal - (subtotal * diskon / 100);
  $('.nilai-total1-td').html('Rp. ' + parseInt(total).toLocaleString());
  $('.nilai-total2-td').val(total);
  
}


function jumlahBarang() {
  var jumlah_barang = 0;
  $('.jumlah_barang_text').each(function () {
    jumlah_barang += parseInt($(this).text());
  });
  $('.jml-barang-td').html(jumlah_barang + ' Barang');
}


$(document).on('click', '.btn-hapus', function (e) {
  e.preventDefault();
  $(this).parent().parent().remove();
  subtotalBarang();
  diskonBarang();
  jumlahBarang();
});

$(document).on('input', '.diskon-input', function () {
  $('.nilai-diskon-td').html($(this).val());
  if ($(this).val().length > 0) {
    $(this).removeClass('is-invalid');
  } else {
    $(this).addClass('is-invalid');
  }
});


$(document).on('input', '.bayar-input', function () {

  if ($(this).val().length > 0) {
    $(this).removeClass('is-invalid');
    $('.nominal-error').prop('hidden', true);
  } else {
    $(this).addClass('is-invalid');
  }
});


$(document).ready(function () {
  $('input[name=search]').on('keyup', function () {
    var searchTerm = $(this).val().toLowerCase();
    $(".product-list li").each(function () {
      var lineStr = $(this).text().toLowerCase();
      console.log(lineStr);
      if (lineStr.indexOf(searchTerm) == -1) {
        $(this).addClass('non-active-list');
        $(this).removeClass('active-list');
      } else {
        $(this).addClass('active-list');
        $(this).removeClass('non-active-list');
      }
    });
  });
});