<?php $__env->startSection('content'); ?><table class="table table-striped table-hover ">
  <tbody>
  <tr>
    <td colspan ="3">Nama</td>
    <td>Rizki Adrian</td>
  </tr>
  <tr>
    <td colspan ="3">Alamat</td>
    <td>Jl. Bina Muda no.44</td>
  </tr>
  <tr class="info">
    <td colspan = "3">No Handphone</td>
    <td>087824136347</td>
  </tr>
  <tr class="success">
    <td colspan = "3">Email</td>
    <td>rizkiadrian39@gmail.com</td>
  </tr>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.data', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>