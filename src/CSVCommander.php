<?php
namespace Avin\CSVCommander;


class CSVCommander
{
    /**
     * Get data from CSV.
     * @param string $fileName CSV file path.
     * @return array Data array.
     */
    public function getData($fileName){
        $resultData = [];
        if (($fileHandle = fopen($fileName, "r")) !== FALSE) {
            while (($data = fgetcsv($fileHandle)) !== FALSE) {
                $resultData[] = $data;
            }
            fclose($fileHandle);
        }

        return $resultData;
    }

    /**
     * Write data to CSV.
     * @param string $fileName CSV file path.
     * @param array $data Source data array.
     * @return bool Operation result flag.
     */
    public function saveData($fileName, $data = array()){
        if (! ($fileHandle = fopen($fileName, "w"))) {
            return false;
        }

        foreach ($data as $dataRow) {
            if (! fputcsv($fileHandle, $dataRow)){
                return false;
            }
        }
        fclose($fileHandle);

        return true;
    }
}