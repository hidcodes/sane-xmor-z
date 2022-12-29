if($totalFiltered >= 1) {

  $json_data = [
    'success' => "true",
    'data' => $data
  ];
  
  echo json_encode($json_data, JSON_UNESCAPED_UNICODE);
  } else {
    $json_data = [
      'success' => "false"
    ];
    echo json_encode($json_data, JSON_UNESCAPED_UNICODE);
  }
} else {
  $json_data = [
    'success' => "false"
  ];
  
  echo json_encode($json_data, JSON_UNESCAPED_UNICODE);
}