<?php
include_once "api/settings.php";
?>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <link rel="stylesheet" href="css/add_prize_number.css">
</head>
<h2 class="text-center mt-3">新增獎號</h2>
<form action="api/add_prize_numb.php" method="post" class="form-trial h-100 w-100">
<table class="mx-auto mt-3 "> 
   <tbody>
    <tr> 
     <th id="months">年月份</th> 
     <td headers="months" class="title">
         <input type="number" name="year" min="<?=date('Y')-1;?>" max="<?=date('Y')+1;?>" step="1">年
         <select name="period" class="period">
             <option value="1">一，二月</option>
             <option value="2">三，四月</option>
             <option value="3">五，六月</option>
             <option value="4">七，八月</option>
             <option value="5">九，十月</option>
             <option value="6">十一，十二月</option>
         </select>
     </td> 
    </tr> 
    <tr> 
     <th id="specialPrize" rowspan="2">特別獎</th> 
     <td headers="specialPrize" class="number"> 
         <input type="number" name="specialPrize" min="00000001" max="99999999">
     </td> 
    </tr> 
    <tr> 
     <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td> 
    </tr> 
    <tr> 
     <th id="grandPrize" rowspan="2">特獎</th> 
     <td headers="grandPrize" class="number"> 
         <input type="number" name="grandPrize" min="00000001" max="99999999">
     </td> 
    </tr> 
    <tr> 
     <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td> 
    </tr> 
    <tr> 
     <th id="firstPrize" rowspan="2">頭獎</th> 
     <td headers="firstPrize" class="number">
     <input type="number" name="firstPrize[]" min="00000001" max="99999999">
     <input type="number" name="firstPrize[]" min="00000001" max="99999999">
     <input type="number" name="firstPrize[]" min="00000001" max="99999999">
     <input type="number" name="firstPrize[]" min="00000001" max="99999999" class="extra mt-1">
    </td> 
    </tr> 
    <tr> 
     <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td> 
    </tr> 
    <tr> 
     <th id="twoPrize">二獎</th> 
     <td headers="twoPrize"> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td> 
    </tr> 
    <tr> 
     <th id="threePrize">三獎</th> 
     <td headers="threeAwards"> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td> 
    </tr> 
    <tr> 
     <th id="fourPrize">四獎</th> 
     <td headers="fourPrizes"> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td> 
    </tr> 
    <tr> 
     <th id="fivePrize">五獎</th> 
     <td headers="fivePrize"> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td> 
    </tr> 
    <tr> 
     <th id="sixPrize">六獎</th> 
     <td headers="sixPrize"> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td> 
    </tr> 
    <tr> 
     <th id="addSixPrize">增開六獎</th> 
     <td headers="addSixPrize" class="number">
     <input type="number" name="addSixPrize[]" min="001" max="999">
     <input type="number" name="addSixPrize[]" min="001" max="999">
     <input type="number" name="addSixPrize[]" min="001" max="999">
     <input type="number" name="addSixPrize[]" min="001" max="999">
     </td> 
    </tr> 
   </tbody>
  </table> 
  <div class=" mt-3 mx-auto form-box">
      <input type="submit" value="submit" class="sub">
      <input type="reset" value="reset" class="reset">
  </div>
 </form>