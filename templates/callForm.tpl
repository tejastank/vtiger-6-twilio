<table border=0 cellspacing=0 cellpadding=0 width=98% align=center>
    <tr>
        <td class="showPanelBg" valign="top" width="100%">
            <div class="small" style="padding:20px">
                <span class="lvtHeaderText">{'LBL_TWILIO_CALL'|@getTranslatedString:$MODULE}</span> <br>
                <hr noshade="noshade" size="1">
                <br>
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="95%">
                    <tr>
                        <td>
                            <table class="small" border="0" cellpadding="3" cellspacing="0" width="100%">
                                <tr>
                                    <td class="dvtTabCache" style="width:10px" nowrap="nowrap">&nbsp;</td>
                                    <td class="dvtSelectedCell" nowrap="nowrap" align="center">{'LBL_CALL'|@getTranslatedString:$MODULE}</td>
                                    <td class="dvtTabCache" style="width:65%">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" valign="top">

                            <!-- SMS Information Tab Opened -->
                            <div id="basicTab">
                                <table class="dvtContentSpace" border="0" cellpadding="3" cellspacing="0" width="100%">
                                    <tr>
                                        <td align="left">
                                            <!-- content cache -->
                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                <tr>
                                                    <td id="autocom"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px">
                                                        <!-- General details -->
                                                        <form name="twilio_call" id="webform_edit" action="index.php?module=Twilio&action=Call&mode=call" method="post">
                                                            <input type="hidden" name="return_id" id="return_id" value="{$RETURN_ID}"></input>
                                                            <input type="hidden" name="return_module" id="return_module" value="{$RETURN_MODULE}"></input>
                                                            <input type="hidden" name="return_action" id="return_action" value="{$RETURN_ACTION}"></input>
                                                            <table   class="small" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td colspan="4" style="padding:5px">
                                                                        <div align="center" >
                                                                            <input title="{'LBL_CALL'|@getTranslatedString:$MODULE}" accesskey="{'LBL_CALL'|@getTranslatedString:$MODULE}" class="crmbutton small save"  name="button" value="{'LBL_CALL'|@getTranslatedString:$MODULE} " style="width:70px" type="submit">
                                                                            <input title="{'LBL_CANCEL_BUTTON_TITLE'|@getTranslatedString:$MODULE}" accesskey="{'LBL_CANCEL_BUTTON_KEY'|@getTranslatedString:$MODULE}" class="crmbutton small cancel" onclick="window.history.back()" name="button" value="{'LBL_CANCEL_BUTTON_LABEL'|@getTranslatedString:$MODULE}" style="width:70px" type="button">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <!--Block Head-->
                                                                <tr>
                                                                    <td colspan="4" class="detailedViewHeader">
                                                                        <b>{'LBL_CALL_INFORMATION'|@getTranslatedString:$MODULE}</b>
                                                                    </td>

                                                                </tr>

                                                                <!-- Cell information  -->
                                                                <tr style="height:25px">
                                                                    <td class="dvtCellLabel" align="right" width="20%" nowrap="nowrap">
                                                                        <font color="red">*</font>{'LBL_CALL_TO'|@getTranslatedString:$MODULE}
                                                                    </td>
                                                                    <td class="dvtCellInfo" align="left" width="40%">
                                                                        <input type="text" onblur="this.className='detailedViewTextBox';" onfocus="this.className='detailedViewTextBoxOn';" class="detailedViewTextBox" id="name"  name="to" value="{$TO}" >
                                                                    </td>

                                                                </tr>
                                                                <tr>

                                                                    <td class="dvtCellLabel" align="right" colspan="1">
                                                                        {'LBL_CALL_BODY'|@getTranslatedString:$MODULE}
                                                                    </td>
                                                                    <td  colspan="3">
                                                                        <textarea  onblur="this.className='detailedViewTextBox';" onfocus="this.className='detailedViewTextBoxOn';" class="detailedViewTextBox" rows="8" cols="90" onblur="this.className='detailedViewTextBox'" name="body" id="body" onfocus="this.className='detailedViewTextBoxOn'" tabindex="" class="detailedViewTextBox" ></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="4" style="padding:5px">
                                                                        <div align="center" >
                                                                            <input title="{'LBL_CALL'|@getTranslatedString:$MODULE}" accesskey="{'LBL_CALL'|@getTranslatedString:$MODULE}" class="crmbutton small save" name="button" value="{'LBL_CALL'|@getTranslatedString:$MODULE} " style="width:70px" type="submit">
                                                                            <input title="{'LBL_CANCEL_BUTTON_TITLE'|@getTranslatedString:$MODULE}" accesskey="{'LBL_CANCEL_BUTTON_KEY'|@getTranslatedString:$MODULE}" class="crmbutton small cancel" onclick="window.history.back()" name="button" value="{'LBL_CANCEL_BUTTON_LABEL'|@getTranslatedString:$MODULE}" style="width:70px" type="button">
                                                                        </div>
                                                                    </td>
                                                                </tr>


                                                            </table>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
