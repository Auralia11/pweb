<!-- Footer -->
                <footer class="text-center text-muted pt-3 border-top mt-auto">
                    <small>&copy; 2026 Pemrograman Web &mdash; Universitas Bumigora</small>
                </footer>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function () {
            var tableSelector = '#datatable';
            var tableElement = document.querySelector(tableSelector);

            if (window.jQuery && tableElement && jQuery.fn && jQuery.fn.DataTable) {
                jQuery(function ($) {
                    if (!$.fn.dataTable.isDataTable(tableSelector)) {
                        $(tableSelector).DataTable({
                            responsive: true,
                            pageLength: 10,
                            language: {
                                search: 'Cari:',
                                lengthMenu: 'Tampilkan _MENU_ data',
                                info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
                                infoEmpty: 'Tidak ada data yang ditampilkan',
                                zeroRecords: 'Data tidak ditemukan',
                                paginate: {
                                    previous: 'Sebelumnya',
                                    next: 'Berikutnya'
                                }
                            }
                        });
                    }
                });
            }

            document.addEventListener('click', function (event) {
                var deleteButton = event.target.closest('.btn-hapus');

                if (!deleteButton) {
                    return;
                }

                event.preventDefault();

                if (typeof Swal === 'undefined') {
                    window.location.href = deleteButton.getAttribute('href');
                    return;
                }

                Swal.fire({
                    title: 'Hapus data ini?',
                    text: 'Data yang sudah dihapus tidak bisa dikembalikan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus',
                    cancelButtonText: 'Batal'
                }).then(function (result) {
                    if (result.isConfirmed) {
                        window.location.href = deleteButton.getAttribute('href');
                    }
                });
            });
        })();
    </script>

    <?php $swal = $this->session->flashdata('swal'); ?>
    <?php if ($swal) : ?>
    <script>
        Swal.fire({
            icon:  '<?= $swal['icon'] ?>',
            title: '<?= $swal['title'] ?>',
            text:  '<?= $swal['text'] ?>',
            timer: 2500,
            showConfirmButton: false
        });
    </script>
    <?php endif; ?>

</body>
</html>