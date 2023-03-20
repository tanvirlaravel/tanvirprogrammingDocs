<?php include_once '../../../inc/header.php'; ?>
<div class="container">
    
    <?php include_once '../../nav.php'; ?>
    
      
    <div class="row">
           <div class="col-4">
            <ul id="sidebar_links">
                
            </ul>
           </div> <!-- col-4 end -->


           <div class="col-8">
           <h2 class="text-danger">BIT</h2>

 
            <h3>Syntax</h3>
            <div>
                <h4>DECIMAL[(M[,D])] [SIGNED | UNSIGNED | ZEROFILL]</h4>                
             <hr>
             <hr>
            </div>

            <h3>Description</h3>
            <div>
                <p>A bit-field type. M indicates the number of bits per value, from 1 to 64. The default is 1 if M is omitted.</p>
                <p>Bit values can be inserted with b'value' notation, where value is the bit value in 0's and 1's.</p>
                <p>Bit fields are automatically zero-padded from the left to the full length of the bit, so for example in a BIT(4) field, '10' is equivalent to '0010'.</p>
                <p>Bits are returned as binary, so to display them, either add 0, or use a function such as HEX, OCT or BIN to convert them.</p>
             <hr>
             <hr>
            </div>

            <h3>Examples</h3>
            <div>
              <p>INSERT INTO b VALUES (b'11111111');</p>
              <p>INSERT INTO b VALUES (b'1111111111111');</p>
              <code>ERROR 1406 (22001): Data too long for column 'b1' at row 1</code>
              <pre>
              SELECT b1+0, HEX(b1), OCT(b1), BIN(b1) FROM b;
                +------+---------+---------+----------+
                | b1+0 | HEX(b1) | OCT(b1) | BIN(b1)  |
                +------+---------+---------+----------+
                |  255 | FF      | 377     | 11111111 |
                |   85 | 55      | 125     | 1010101  |
                +------+---------+---------+----------+
              </pre>
              
             <hr>
             <hr>
            </div>
            

           </div> <!-- col-8 end -->    
    </div><!-- row end -->
</div><!-- container -->



<?php include_once '../../../inc/footer.php'; ?>  