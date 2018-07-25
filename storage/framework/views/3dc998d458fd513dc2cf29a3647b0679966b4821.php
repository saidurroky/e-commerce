<?php $__env->startSection('pageTitle'); ?>
    Category
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pgSubTitle'); ?>
    Manage Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <form>
       <table>
           <tr>
               <td>Order Status</td>
               <td>
                   <select>
                       <option>Pending</option>
                       <option>Cancel</option>
                       <option>Successfull</option>
                   </select>
               </td>
           </tr>
           <tr>
               <td>Payment Status</td>
               <td>
                   <select>
                       <option>Pending</option>
                       <option>Cancel</option>
                       <option>Successfull</option>
                   </select>
               </td>
           </tr>
           <tr>
               <td>Order Status</td>
               <td>
                   <input type="submit" name="btn" value="Update Order"/>
               </td>
           </tr>
       </table>
   </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>