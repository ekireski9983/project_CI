<script>
    $(document).ready(function(){
        $(".nav-link").click(function (e) { 
            e.preventDefault();
            $(".nav-item").removeClass("active");
            $(this).parent().addClass("active");
            const id = $(this).attr("id");
            
            if(id == "konfig_barang"){
                $.ajax({
                    url: "<?php echo base_url('admin/viewbarang')?>",
                    success: function(response) {
                        $("#isi_menu").html(response);
                    }
                })
            }
        });
    });
</script>