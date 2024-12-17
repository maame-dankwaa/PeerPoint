<?php
class Records {	
   
	private $videoTable = 'video'; //For staff table
	private $recordTable = 'records'; //For records table
	private $cognitiveTable = "cognitive_data"; //For cognitive Table
	private $healthTable = "health_data"; //For health table
	private $nutritionTable = "nutrition_data"; //For nutrition table
	private $commentTable = "comments"; //For donors table
	public $vidId;
	public $kayacare_id;
	public $author;
	public $dateCreated;
	public $vidTopic;
	public $numViews;
	public $rating;
    public $approved;
	public $dob;
	public $sex;
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function listVideo(){
		
		$sqlQuery = "SELECT * FROM ".$this->videoTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(vidId LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR author LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR dateCreated LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR vidTopic LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR vidURL LIKE "%'.$_POST["search"]["value"].'%") ';		
			$sqlQuery .= ' OR numViews LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR rating LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR approved LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR dob LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR sex LIKE "%'.$_POST["search"]["value"].'%") ';
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->videoTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'vidId' => $record['vidId'],
				'author' => $record['author'],
				'dateCreated' => $record['dateCreated'],
				'vidTopic' => $record['vidTopic'],
				'vidUrl' => $record['vidURL'],
				'numViews' => $record['numViews'],
				'rating' => $record['rating'],
				'approved' => $record['approved'],
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	public function listRecords(){
		
		$sqlQuery = "SELECT * FROM ".$this->recordTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR kayacare_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR development_gap LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR record_date LIKE "%'.$_POST["search"]["value"].'%" ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->recordTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'kayacare_id' => $record['kayacare_id'],
				'development_gap' => $record['development_gap'],
				'record_date' => $record['record_date'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	
	public function listComments(){
		$sqlQuery = "SELECT * FROM ".$this->commentTable." ";
					
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(author LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR dateCreated LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR label LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR vidID LIKE "%'.$_POST["search"]["value"].'%" ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->commentTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'author' => $record['author'],
				'dateCreated' => $record['dateCreated'],
				'label' => $record['label'],
				'vidID' => $record['vidID']
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}
	

	public function listCognitive(){
		
		$sqlQuery = "SELECT * FROM ".$this->cognitiveTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR rw_index LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR numeracy_skills LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR decision_making LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR ct_index LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR problem_solving LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR curiosity LIKE "%'.$_POST["search"]["value"].'%") ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->cognitiveTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'rw_index' => $record['rw_index'],
				'numeracy_skills' => $record['numeracy_skills'],
				'decision_making' => $record['decision_making'],
				'ct_index' => $record['ct_index'],
				'problem_solving' => $record['problem_solving'],
				'curiosity' => $record['curiosity'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	public function listHealth(){
		$sqlQuery = "SELECT * FROM ".$this->healthTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR length LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR weight LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR blood_pressure LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR immunization LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR ears LIKE "%'.$_POST["search"]["value"].'%") ';	
			$sqlQuery .= ' OR eyes LIKE "%'.$_POST["search"]["value"].'%") ';
			$sqlQuery .= ' OR allergies LIKE "%'.$_POST["search"]["value"].'%") ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->healthTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'length' => $record['length'],
				'weight' => $record['weight'],
				'blood_pressure' => $record['blood_pressure'],
				'immunization' => $record['immunization'],
				'ears' => $record['ears'],
				'eyes' => $record['eyes'],
				'allergies' => $record['allergies'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}

	public function listNutrition(){
		$sqlQuery = "SELECT * FROM ".$this->nutritionTable." ";
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= 'where(record_id LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR iron_deficiency LIKE "%'.$_POST["search"]["value"].'%" ';			
			$sqlQuery .= ' OR zinc_deficiency LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR growth LIKE "%'.$_POST["search"]["value"].'%" ';
			
		}
		
		
		
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->nutritionTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		$displayRecords = $result->num_rows;
		$records = array();		
		while ($record = $result->fetch_assoc()) { 				
			$records[] = array(
				'record_id' => $record['record_id'],
				'iron_difficiency' => $record['zinc_difficiency'],
				'zinc_difficiency' => $record['zinc_difficiency'],
				'growth' => $record['growth'],
				'delete' => '<button type="button" name="delete" id="'.$record["record_id"].'"
				class="btn btn-danger btn-xs delete" >Delete</button>'
			);			
		}
		echo json_encode($records);
		return json_encode($records);
	}
	
}
?>