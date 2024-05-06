<?php
class DBView
{
    public function viewResults($result)
    {
        $resultView = '';

        while ($row = $result->fetch_assoc()) {
            $resultView .=
                '<br>' . $row['LawyerID']
                . ' ' . $row['LawyerName']
                . ' ' . $row['LawyerAddress']
                . ' ' . $row['Specialty']
                . '<br>';
        }
        return $resultView;
    }
}
