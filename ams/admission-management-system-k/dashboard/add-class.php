<?php require_once '../header.php';
require_once '../core.php';
require_once 'session.php';
?>
<div class="sb-nav-fixed">
    <?php require_once 'Dheader.php' ?>
    <div id="layoutSidenav">
        <?php require_once 'LeftMenu.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <form id="add_class_form_admin" @submit.prevent="submitAllClass()">
                        <div class="repeatable_field_add_class" v-for="(classList,index) in classLists">
                            <div class="container">
                                <div class="cross_cut_a_field" @click.prevent="deleteAdata(index)" v-if="classLists.length > 1">
                                    <strong><span>X</span></strong>
                                </div>
                                <div class="row">
                                    <h5> <strong>Entry Number ({{index + 1}})</strong></h5>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="add_class_class" class="form-label">Class</label>
                                            <input type="number" class="form-control" id="add_class_class" min="1" max="12" required v-model="classList.class" v-on:keyup="whenClassTyping(index)" v-on:change="whenClassTyping(index)">
                                        </div>
                                        <strong v-if="classLists[index].duplicateClassFound == true">
                                            <p class="errorColor">Class Already Exist! Delete Old One First.</p>
                                        </strong>
                                        <!-- <div class="mb-3">
                                            <label for="groupORclass" class="form-label">Group/Class (Seperate By Comma)</label>
                                            <input type="text" class="form-control" id="groupORclass" v-model="classList.groupORsubject">
                                        </div> -->
                                        <div class="mb-3" style="display: none;">
                                            <label for="groupORclass">Group ( Only For SSC & HSC )</label>
                                            <select class="form-control" id="groupORclass" v-model="classList.groupORsubject">
                                                <option disabled="disabled" value="">—Select Group—</option>
                                                <option>SCIENCE</option>
                                                <option>COMMERCE</option>
                                                <option>ARTS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="available_seat" class="form-label">Available Seat</label>
                                            <input type="number" class="form-control" id="available_seat" min="0" required v-model="classList.availableSeat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="admission_fee" class="form-label">Admission Fee</label>
                                            <input type="number" class="form-control" id="admission_fee" min="0" required v-model="classList.admissionFee">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add_more_button">
                                <button class="btn btn-outline-info" @click.prevent="class_add_more()" v-if="classLists.length == index + 1" :disabled="classLists[index].duplicateClassFound == true">Add More (+)</button>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" id="add_class_form_admin_submit" value="Submit" :disabled="submit_button_diasble == true" />
                    </form>
                </div>
            </main>
            <?php require_once 'Dfooter.php' ?>
        </div>
    </div>
</div>
<?php require_once '../footer.php';
?>