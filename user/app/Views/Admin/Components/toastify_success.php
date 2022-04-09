<script>
  setTimeout(function() {
    Toastify({
      text: "<?= session()->getTempdata('success')?>",
      gravity: "top",
      position: 'right',
      className: "small",
      style: {
        color: 'black',
        background: 'linear-gradient(to right, #2BFC0F, #8EF781)'
      }
    }).showToast();
  }, 0);
</script>