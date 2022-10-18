<!-- Modal -->
<div class="modal fade" id="status<?php echo $row_am['id_petition'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<?php  

?>
    <div class="modal-dialog modal-xl">
        <form action='update_status_db.php' id="upload-form<?php echo $row_am['id_petition'] ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">คำร้องของคุณ <?php echo $row_modal['name']." ".$row_modal['lastname']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body modal-dialog-scrollable">
                    <br>
                    <div class="bg-light rounded h-100 p-4">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">กระท่อมสายพันธ์ุ</dt>
                        <dd class="col-sm-8">
                            <?php echo $row_am['species']; ?>
                        </dd>

                        <dt class="col-sm-4">จำนวน</dt>
                        <dd class="col-sm-8"><?php echo $row_modal['quantity']; ?> ต้น</dd>

                        <dt class="col-sm-4">ที่ตั้งฟาร์ม</dt>
                        <dd class="col-sm-8">ที่อยู่ <?php echo $row_modal['address_farm']; ?> ตำบล <?php echo $row_modal['name_di']; ?> อำเภอ <?php echo $row_modal['name_am']; ?> จังหวัด <?php echo $row_modal['name_pr']; ?> รหัสไปรษณีย์ <?php echo $row_modal['zip_code']; ?>  </dd>

                        <dt class="col-sm-4 text-truncate">เบอร์โทร</dt>
                        <dd class="col-sm-8"><?php echo $row_modal['tel']; ?></dd>

                        <dt class="col-sm-4 text-truncate">สถานะปัจจุบัน</dt>
                        <dd class="col-sm-8"><?php if($row_am['status'] == 1){ ?>
                                            รอการตรวจสอบ
                                        <?php }elseif($row_am['status'] == 2){ ?>
                                            กำลังดำเนินการ
                                        <?php }elseif($row_am['status'] == 3){?>
                                            เสร็จสิ้น
                                        <?php } ?></dd>
                        <input type="hidden" name="petid" id="petid" value="<?php echo $row_am['id_petition']; ?>">
                        <dt class="col-sm-4">เปลี่ยนสถานะ</dt>
                        <dd class="col-sm-8">
                        <div class="btn-group" role="group" btn="<?= $row_am['id_petition'] ?>">
                            <input btn="<?= $row_am['id_petition'] ?>" type="radio" class="btn-check" name="status" id="btnradio1_<?= $row_am['id_petition'] ?>" petid="<?= $row_am['id_petition'] ?>"  value='1' autocomplete="off" <?php if ($row_modal['status'] == 1) echo "checked"; ?>>
                            <label class="btn btn-outline-primary" for="btnradio1_<?= $row_am['id_petition'] ?>" id="btnradio1text">รอการตรวจสอบ</label>

                            <input btn="<?= $row_am['id_petition'] ?>" type="radio" class="btn-check" name="status" id="btnradio2_<?= $row_am['id_petition'] ?>" petid="<?= $row_am['id_petition'] ?>"  value='2' autocomplete="off" <?php if ($row_modal['status'] == 2) echo "checked"; ?>>
                            <label class="btn btn-outline-primary" for="btnradio2_<?= $row_am['id_petition'] ?>" id="btnradio2text">กำลังดำเนินการ</label>

                            <input btn="<?= $row_am['id_petition'] ?>" type="radio" class="btn-check" name="status" id="btnradio3_<?= $row_am['id_petition'] ?>" petid="<?= $row_am['id_petition'] ?>" value='3' autocomplete="off" <?php if ($row_modal['status'] == 3) echo "checked"; ?>>
                            <label class="btn btn-outline-primary" for="btnradio3_<?= $row_am['id_petition'] ?>" id="btnradio3text">เสร็จสิ้น</label>          
                        </div>
                        </dd>
                        <div><br></div>
                            <dt class="col-sm-4" id="dis1_<?= $row_am['id_petition'] ?>" style="display:none">ผลการอนุมัติ</dt>
                            <dd class="col-sm-8" id="dis2_<?= $row_am['id_petition'] ?>" style="display:none">
                            <div class="btn-group" role="group">
                            
                                        <input ra="<?= $row_am['id_petition'] ?>" type="radio" class="btn-check" name="approved" id="radio1_<?= $row_am['id_petition'] ?>" petid="<?= $row_am['id_petition'] ?>" value='1' autocomplete="off" >
                                        <label class="btn btn-outline-primary" id="radio1text" for="radio1_<?= $row_am['id_petition'] ?>">อนุมัติ</label>

                                        <input ra="<?= $row_am['id_petition'] ?>" type="radio" class="btn-check" name="approved" id="radio2_<?= $row_am['id_petition'] ?>" petid="<?= $row_am['id_petition'] ?>" value='0' autocomplete="off">
                                        <label class="btn btn-outline-primary" id="radio2text" for="radio2_<?= $row_am['id_petition'] ?>">ไม่อนุมัติ</label>
                            </div>
                            </dd>
                        
                        <div><br></div>
                            <dt class="col-sm-4" id="dis3_<?= $row_am['id_petition'] ?>" style="display:none">แนบรูปใบรับรอง</dt>
                            <dd class="col-sm-8" id="dis4_<?= $row_am['id_petition'] ?>" style="display:none">
                                <input class="form-control" type="file" name='image' id="image_<?= $row_am['id_petition'] ?>" onchange="readURL(this);" accept="image/jpeg">
                                <img id="display" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"/>
                                <input type="hidden" name="cid" id="cid_<?= $row_am['id_petition'] ?>"> 
                            </dd>
                            <dt class="col-sm-4"></dt>
                            <dd class="col-sm-8">
                                    <button type="submit" for="updatestatus" class="btn btn-primary text-sm-end">บันทึก</button>
                            </dd>
                        </dl>
                    </div>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
        <script type="module">

        //   import { Web3Storage, getFilesFromPath } from 'https://cdn.jsdelivr.net/npm/web3.storage/dist/bundle.esm.min.js'
        import { Web3Storage } from 'https://cdn.jsdelivr.net/npm/web3.storage/dist/bundle.esm.min.js'
        const form = document.getElementById('upload-form<?= $row_am['id_petition'] ?>')

    
        form.addEventListener('submit', async function (event) {
        
        // const petID = document.querySelector('#petid')
        const filepicker = document.querySelector('#image_<?= $row_am['id_petition'] ?>')
        console.log('loading....1');
        $("#spinner").show();
        


        if (filepicker.files.length == 1) {
            // don't reload the page!    
            event.preventDefault()
            // console.log(filepicker);
            // console.log('****0.5');
            // console.log(filepicker.value);
            // console.log(filepicker.name);
            // console.log(filepicker.files[0].name);
            // console.log('***2');
            // console.log(filepicker.files[0].type);
            // console.log('***1');
            console.log('loading....2');

            const file = filepicker.files[0];

            const newname = "GAP_"+"<?= MD5($row_am['id_petition'])?>"+".jpg"

            const renamefile = rename(file,newname)
            // console.log(filepicker.files);
            // console.log('***0.22223');
            // console.log(filepicker.files[0].name);
            // console.log('***0.22');

            // console.log('******1');
            // console.log(filepicker);
            // console.log('******2');
            // console.log(document.getElementById('filepicker').value);
            // console.log(filepicker.files[0].name);
            // filepicker.files[0].name = "GAP-xxxxxxxx";
            // console.log('******3');
            // const filename = filepicker.files[0].name;
            console.log('loading....3');
            
            const token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJkaWQ6ZXRocjoweGJGMzM0NTdENGE3N2ZkRjk4MkJGOEYxOTM3NEE3QjNhM0NjOGQ3RkUiLCJpc3MiOiJ3ZWIzLXN0b3JhZ2UiLCJpYXQiOjE2NjUyOTY4NTM0MTYsIm5hbWUiOiJrcmF0b20ifQ.3oNEp3dX5idsZSuwkPBm6yj0GX-VlWCGN3fu145gx98"
            // console.log('******7');
            const client = new Web3Storage({ token: token })
            // console.log('******8');
            // console.log(client)

            const files = filepicker.files

            const filename = filepicker.files[0].name
            console.log('loading....4');

            // console.log(files);
            const cid = await client.put(files, {
            onRootCidReady: (localCid) => {
                console.log(localCid);          
            }
            })
            console.log('loading....5');

            const link = "https://"+cid+".ipfs.w3s.link/"+filename
            // console.log(link)
            var a =  document.getElementById('cid_<?= $row_am['id_petition'] ?>')
            a.value = link
            console.log('loading....6');

            // console.log(a.value);
            console.log('succeed');
            form.submit();

            // form.action = 'update_status_db.php'
            
        }else{
            console.log('succeed2');
            form.submit();
            // form.action = 'update_status_db.php'

        }
        

        
        


      }, false)



      function rename(fileToAmend,updatedFileName){
        Object.defineProperty(fileToAmend, 'name', {
        writable: true,
        value: updatedFileName
        });
      }
      

    </script>
    </div>
</div>
