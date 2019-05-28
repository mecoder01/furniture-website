<?php 
	class FurnitureTableGenerator
	{
		public $tableHeadings;
		public $tableRows=[];
		public function setTableHeadings($tableHeadings){
			$this->tableHeadings = $tableHeadings;
		}
		public function addTableRow($tableRow){
			$this->tableRows[] = $tableRow;
		}
		public function getTable(){
			$result = '<table border="2">';
			$result .= '<tr>';
				foreach ($this->tableHeadings as $heading) {
					$result .= '<th>' . $heading . '</th>';
				}
			$result .= '</tr>';
			foreach ($this->tableRows as $row) {
				$result .= '<tr>';
					foreach ($row as $key => $cell) {
						$result .= '<td>' . $cell . '</td>';
					}
				$result .= '<tr>';
			}
			$result .= '</table>';
			echo $result;
		}
	}
?>