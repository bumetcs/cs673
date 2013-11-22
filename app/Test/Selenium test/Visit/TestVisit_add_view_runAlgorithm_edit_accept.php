<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://localhost/");
    $this->open("/");
    $this->click("link=Login");
    $this->click("css=button.btn.btn-default");
    $this->waitForPageToLoad("30000");
    $this->click("link=Patients");
    $this->click("link=List Patients");
    $this->waitForPageToLoad("30000");
    $this->click("link=Patients");
    $this->click("link=Add Patient");
    $this->waitForPageToLoad("30000");
    $this->type("id=PatientPatientFirstname", "Harry");
    $this->type("id=PatientPatientLastname", "Potter");
    $this->type("id=PatientPatientMiddlename", "D");
    $this->click("id=PatientDob");
    $this->click("link=4");
    $this->type("id=PatientDob", "11/04/1997");
    $this->click("//form[@id='PatientAddForm']/div[4]");
    $this->type("id=PatientOccupation", "Magician");
    $this->select("id=PatientGender", "label=Male");
    $this->select("id=PatientRace", "label=Caucasian or European American");
    $this->type("id=PatientStreet", "2233 AB Street");
    $this->type("id=PatientCity", "KCity");
    $this->select("id=PatientState", "label=Georgia");
    $this->type("id=PatientPostalCode", "04256");
    $this->click("css=input.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Patients");
    $this->click("link=Add Patient");
    $this->waitForPageToLoad("30000");
    $this->type("id=PatientPatientFirstname", "Hello");
    $this->type("id=PatientPatientLastname", "Kitty");
    $this->click("id=PatientDob");
    $this->click("link=5");
    $this->type("id=PatientDob", "01/05/1987");
    $this->click("id=PatientOccupation");
    $this->type("id=PatientOccupation", "Pet");
    $this->select("id=PatientGender", "label=Female");
    $this->select("id=PatientRace", "label=Native American or Native Alaskan");
    $this->type("id=PatientStreet", "000");
    $this->type("id=PatientCity", "Boston");
    $this->select("id=PatientState", "label=Maine");
    $this->select("id=PatientState", "label=Florida");
    $this->select("id=PatientState", "label=Massachusetts");
    $this->type("id=PatientPostalCode", "21458");
    $this->click("css=input.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Patients");
    $this->click("link=List Patients");
    $this->waitForPageToLoad("30000");
    $this->click("link=FHK05095");
    $this->click("link=Update Patient");
    $this->waitForPageToLoad("30000");
    $this->type("id=PatientPatientFirstname", "Goodbye");
    $this->click("css=input.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Patients");
    $this->click("link=List Patients");
    $this->waitForPageToLoad("30000");
    $this->click("link=FGK05095");
    $this->click("link=Delete Patient");
    $this->assertTrue((bool)preg_match('/^Do you want to delete this patient record[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Patients");
    $this->click("link=Search Patient");
    $this->waitForPageToLoad("30000");
    $this->type("id=patient_number", "MHP04094");
    $this->type("id=Patient_Name", "Harry");
    $this->type("id=patient_dob", "1997-11-04");
    $this->type("name=Patient_LastName", "Potter");
    $this->click("css=button.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Patients");
    $this->click("link=List Patients");
    $this->waitForPageToLoad("30000");
    $this->click("link=MHP04094");
    $this->click("link=Visits");
    $this->click("link=Add Visit");
    $this->waitForPageToLoad("30000");
    $this->type("id=MedhistoryComplaintComplaints", "Sore throat, fever");
    $this->click("id=DrugAllergymetyes");
    $this->click("id=DrugAllergyglp_1rayes");
    $this->click("link=kg / cm");
    $this->type("id=VitalsLabFWeight", "89");
    $this->type("id=VitalsLabFHeight", "178");
    $this->type("id=VitalsLabA1c", "6");
    $this->type("id=VitalsLabNotes", "Overweight");
    $this->type("id=TreatmentA1cGoal", "5");
    $this->type("id=TreatmentFWeightGoal", "76");
    $this->click("css=input.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Run Algorithm");
    $this->waitForPageToLoad("30000");
    $this->click("id=Accept");
    $this->waitForPageToLoad("30000");
    $this->click("link=Visits");
    $this->click("link=Add Visit");
    $this->waitForPageToLoad("30000");
    $this->type("id=MedhistoryComplaintComplaints", "Nothing");
    $this->click("id=DrugAllergydpp_4iyes");
    $this->type("id=VitalsLabFWeight", "85");
    $this->type("id=VitalsLabFHeight", "188");
    $this->type("id=VitalsLabA1c", "5.8");
    $this->type("id=VitalsLabNotes", "better");
    $this->type("id=TreatmentA1cGoal", "5");
    $this->type("id=TreatmentFWeightGoal", "76");
    $this->click("css=input.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Run Algorithm");
    $this->waitForPageToLoad("30000");
    $this->click("css=span.glyphicon.glyphicon-edit");
    $this->waitForPageToLoad("30000");
    $this->select("id=TreatmentRunAlgorithmMedicineNameOne", "label=Bromocriptine_QR");
    $this->type("id=TreatmentRunAlgorithmEditedJustification", "Serious");
    $this->type("id=TreatmentRunAlgorithmRecommendations", "Keep fit");
    $this->click("css=input.btn.btn-primary");
    $this->waitForPageToLoad("30000");
    $this->click("link=Visits");
    $this->click("link=Vitals & Labs");
    $this->click("link=Drug Allergies");
    $this->click("link=Medical History");
    $this->click("link=Medications");
    $this->click("link=Charts");
    $this->click("link=Patient Information");
    $this->click("link=Visits");
    $this->click("xpath=(//a[contains(text(),'November 17, 2013')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("link=Go Back");
    $this->waitForPageToLoad("30000");
    $this->click("link=My Account");
    $this->click("link=Logout");
    $this->waitForPageToLoad("30000");
  }
}
?>