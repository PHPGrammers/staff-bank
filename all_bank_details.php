<?php
//add or include library to file
include 'PHPCRUDLib/PHPCRUDLib.php';
use PHPGrammers\PHPCRUDLib as PHPCRUDLib;
//define table name
$table = 'bank_details';
//create library object and pass the table name to it
$PHPCRUDLib = new PHPCRUDLib($table);
//select all records in table
$result = $PHPCRUDLib->allRecords();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="tailwind.min.css">
  </head>
  <body>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Account Info
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Bank Info
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Date
              </th>

            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($result as $key => $value) { ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAAGFBMVEX///8AAAD19fUKCgpfX18qKiqfn5/V1dWhS92AAAAB90lEQVR4nO2ZQVLDMBAEYydx/v9joGAKKEyileTsLHSfdZhW+iBXTicAAACAAOvlsmZvmMHtuizXW/aKcbbz8sp5y94xyHpZPqid11tWonJe71mJsnl9ZlU7r69ZVc7re1Zl8/qZVc289rKqmNd+VuXy+j2rWnndy6pSXvezKpPX46xq5NWSVYW82rKyz6s9K++8IlkJx7xiWQm7vOJZCa+8erISTnn1ZSVs8urPSnjk9TCr8/bwF3PIq2lkg2yyRuuT3f1pH7hp67xC43zziubimlfHDVvm1TXKL6/eTNzyGrhZq7yGxvjkNZqHS14TbtQirykj8vOalUV2XiNfglGOzGvsSzDKYXmNfwlGOSavZ2YljsjruVmJ6Xk9PysxN6+MrMTMvHKyEtPyystKzMkrMysxI6/crMRwXvlZibG8HLISI3l5ZCW68/LJSvTl5ZSV6MnLKysRzssvKxHLyzErEcnLMyuR/qcQAAAAZLP3RHA6hwgiiCDiMRARRBBBBBFEEEEEkfxziCCCCCIeAxFBBBFEEEEEEUQQyT+HCCKIIOIxEBFEEEEEEUQQQQSR/HOIIIIIIh4DEUEEEUQQQQQRRBDJP4cIIogg4jEQEQAAAPi77D0QnEDEDUTcQMQNRNxAxA1E3EDEDUTcQMSN/ycCAAAARXkBtIw7xTbL6bEAAAAASUVORK5CYII=" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      <?php echo $value['account_name']; ?>
                    </div>
                    <div class="text-sm text-gray-500">
                    <?php echo $value['account_number']; ?>
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $value['bank_name']; ?></div>
                <div class="text-sm text-gray-500"><?php echo $value['bank_branch']; ?></div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  New Record
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                <?php echo date_create($value['created_at'])->format('jS M, Y h:i A'); ?>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>
          <?php } ?>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
      <div class="text-center">
        <a href="index.html" class="justify-center py-2 px-4 border text-center rounded-md text-white bg-green-600 hover:bg-green-700">Add new bank record</a>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
