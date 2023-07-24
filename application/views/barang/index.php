<?= $this->session->flashdata('barang_message'); ?>

<?php
function rupiah($angka)
{

  $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
  return $hasil_rupiah;
}
?>

<div class="table-responsive  border-1 border-dark">
  <table id="example" class="table table-striped m-auto mt-3 text-center" style="max-width: 800px;">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Barang</th>
        <th scope="col">Qty</th>
        <th scope="col">Modal</th>
        <th scope="col">Total Modal</th>
        <th scope="col" style="border-left:1px solid red">Jual</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($barang as $b) : ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $b['barang']; ?></td>
          <td><?= $b['qty']; ?></td>
          <td><?= rupiah($b['modal']); ?></td>
          <td><?= rupiah($b['qty'] * $b['modal']); ?></td>
          <td style="border-left:1px solid red"><?= rupiah($b['jual']); ?></td>
          <td>
            <div class="aksi">
              <!-- <a href="<?= base_url('Barang/updateBarang/') . $b['id']; ?>" class="me-4">
                
              </a> -->
              <a href="<?= base_url('Barang/deleteBarang/') . $b['id']; ?>" onclick="return confirm('Yakin ingin hapus data?')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                </svg>
              </a>
            </div>
          </td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>
  <div class="btn-add">
    <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
      </svg>
    </button>
  </div>
</div>

<!-- Toogle Offcanvas -->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Tambah Barang</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small mb-3">
    <form method="post" action="<?= base_url('barang'); ?>">
      <div class="row mb-3">
        <label for="inputBarang1" class="col-sm-2 col-form-label">Barang</label>
        <div class="col-sm-10">
          <input type="text" name="barang" class="form-control" id="inputBarang1" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputBarang2" class="col-sm-2 col-form-label">Qty</label>
        <div class="col-sm-10">
          <input type="number" name="qty" class="form-control" id="inputBarang2" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputBarang3" class="col-sm-2 col-form-label">Modal</label>
        <div class="col-sm-10">
          <input type="text" name="modal" class="form-control" id="inputBarang3" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputBarang4" class="col-sm-2 col-form-label">Jual</label>
        <div class="col-sm-10">
          <input type="text" name="jual" class="form-control" id="inputBarang4" required>
        </div>
      </div>

      <div class="mt-4">
        <button type="submit" class="btn btn-sm btn-primary float-end">Save Change</button>
      </div>
    </form>
  </div>
</div>