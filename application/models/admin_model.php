<?php
class admin_model extends CI_MODEL
{
    public function addProduct($data)
    {
        $dataset = array(
            "pro_id" => $data["proID"],
            "pro_name" => $data["proName"],
            "type_id" => $data["type"],
            "min_stock_limit" => $data["minLimit"]
        );
        $r = $this->db->insert('product', $dataset);
        if($r){
            $dataset2 = array(
                "pro_id" => $data["proID"],
                "unit_price" => 0,
                "quantity" => 0,
                "price" => 0
            );
            $r2 = $this->db->insert('stock', $dataset2);
            echo $r2;
        }
        
    }
    public function getTypes()
    {

        $query = $this->db->query("SELECT DISTINCT type_id, type_name from product_view");
        return $query->result();
    }
    public function getAllTypes()
    {

        $query = $this->db->query("SELECT DISTINCT type_id, type_name from type");
        return $query->result();
    }
    public function getStockHistory()
    {

        $query = $this->db->query("SELECT * from stock");
        return $query->result_array();
    }
    
    public function getProducts()
    {
        $query = $this->db->get('product_view');
        return $query->result();
    }
    public function getDeps()
    {
        $query = $this->db->get('department');
        return $query->result();
    }
    public function deleteProduct($data)
    {
        $this->db->where('pro_id', $data['prd']);
        echo $this->db->delete('product');
    }
    public function getprod($id)
    {
        $query = $this->db->get_where('product_view', array('type_id' => $id));
        return $query->result_array();
    }
    public function inboundProducts($data)
    {
        if ($data['type'] != '') {
            $dataset = array(
                "grn" => $data["grn_no"],
                "po_no" => $data["po_no"],
                "date" => $data["date"],
                "supplier" => $data["name"],
                "pro_id" => $data["product"],
                "unit_price" => $data["unit"],
                "quantity" => $data["stock"],
                "price" => $data["tstock"],
                "description" => $data["des"]
            );
            $r = $this->db->insert('stock', $dataset);
            if (!$r) {
                echo "Something went wrong";
            } else if ($r & ($data['type2'] == '')) {
                echo "1 row inserted";
            } else if ($r & ($data['type2'] != '')) {
                $dataset2 = array(
                    "grn" => $data["grn_no"],
                    "po_no" => $data["po_no"],
                    "date" => $data["date"],
                    "supplier" => $data["name"],
                    "pro_id" => $data["product2"],
                    "unit_price" => $data["unit2"],
                    "quantity" => $data["stock2"],
                    "price" => $data["tstock2"],
                    "description" => $data["des2"]
                );
                $r2 = $this->db->insert('stock', $dataset2);
                if (!$r2) {
                    echo "Something went wrong";
                } else if ($r2 & ($data['type3'] == '')) {
                    echo "2 rows inserted";
                } else if ($r2 & ($data['type3'] != '')) {
                    $dataset3 = array(
                        "grn" => $data["grn_no"],
                        "po_no" => $data["po_no"],
                        "date" => $data["date"],
                        "supplier" => $data["name"],
                        "pro_id" => $data["product3"],
                        "unit_price" => $data["unit3"],
                        "quantity" => $data["stock3"],
                        "price" => $data["tstock3"],
                        "description" => $data["des3"]
                    );
                    $r3 = $this->db->insert('stock', $dataset3);
                    if (!$r3) {
                        echo "Something went wrong";
                    } else if ($r3 & ($data['type4'] == '')) {
                        echo "3 rows inserted";
                    } else if ($r3 & ($data['type4'] != '')) {
                        $dataset4 = array(
                            "grn" => $data["grn_no"],
                            "po_no" => $data["po_no"],
                            "date" => $data["date"],
                            "supplier" => $data["name"],
                            "pro_id" => $data["product4"],
                            "unit_price" => $data["unit4"],
                            "quantity" => $data["stock4"],
                            "price" => $data["tstock4"],
                            "description" => $data["des4"]
                        );
                        $r4 = $this->db->insert('stock', $dataset4);
                        if (!$r4) {
                            echo "Something went wrong";
                        } else if ($r4 & ($data['type5'] == '')) {
                            echo "4 rows inserted";
                        } else if ($r4 & ($data['type5'] != '')) {
                            $dataset5 = array(
                                "grn" => $data["grn_no"],
                                "po_no" => $data["po_no"],
                                "date" => $data["date"],
                                "supplier" => $data["name"],
                                "pro_id" => $data["product5"],
                                "unit_price" => $data["unit5"],
                                "quantity" => $data["stock5"],
                                "price" => $data["tstock5"],
                                "description" => $data["des5"]
                            );
                            $r5 = $this->db->insert('stock', $dataset5);
                            if (!$r5) {
                                echo "Something went wrong";
                            } else if ($r5 & ($data['type6'] == '')) {
                                echo "5 rows inserted";
                            } else if ($r5 & ($data['type6'] != '')) {
                                $dataset6 = array(
                                    "grn" => $data["grn_no"],
                                    "po_no" => $data["po_no"],
                                    "date" => $data["date"],
                                    "supplier" => $data["name"],
                                    "pro_id" => $data["product6"],
                                    "unit_price" => $data["unit6"],
                                    "quantity" => $data["stock6"],
                                    "price" => $data["tstock6"],
                                    "description" => $data["des6"]
                                );
                                $r6 = $this->db->insert('stock', $dataset6);
                                if (!$r6) {
                                    echo "Something went wrong";
                                } else if ($r6 & ($data['type7'] == '')) {
                                    echo "6 rows inserted";
                                } else if ($r6 & ($data['type7'] != '')) {
                                    $dataset7 = array(
                                        "grn" => $data["grn_no"],
                                        "po_no" => $data["po_no"],
                                        "date" => $data["date"],
                                        "supplier" => $data["name"],
                                        "pro_id" => $data["product7"],
                                        "unit_price" => $data["unit7"],
                                        "quantity" => $data["stock7"],
                                        "price" => $data["tstock7"],
                                        "description" => $data["des7"]
                                    );
                                    $r7 = $this->db->insert('stock', $dataset7);
                                    if (!$r7) {
                                        echo "Something went wrong";
                                    } else if ($r7 & ($data['type8'] == '')) {
                                        echo "7 rows inserted";
                                    } else if ($r7 & ($data['type8'] != '')) {
                                        $dataset8 = array(
                                            "grn" => $data["grn_no"],
                                            "po_no" => $data["po_no"],
                                            "date" => $data["date"],
                                            "supplier" => $data["name"],
                                            "pro_id" => $data["product8"],
                                            "unit_price" => $data["unit8"],
                                            "quantity" => $data["stock8"],
                                            "price" => $data["tstock8"],
                                            "description" => $data["des8"]
                                        );
                                        $r8 = $this->db->insert('stock', $dataset8);
                                        if (!$r8) {
                                            echo "Something went wrong";
                                        } else if ($r8 & ($data['type9'] == '')) {
                                            echo "8 rows inserted";
                                        } else if ($r8 & ($data['type9'] != '')) {
                                            $dataset9 = array(
                                                "grn" => $data["grn_no"],
                                                "po_no" => $data["po_no"],
                                                "date" => $data["date"],
                                                "supplier" => $data["name"],
                                                "pro_id" => $data["product9"],
                                                "unit_price" => $data["unit9"],
                                                "quantity" => $data["stock9"],
                                                "price" => $data["tstock9"],
                                                "description" => $data["des9"]
                                            );
                                            $r9 = $this->db->insert('stock', $dataset9);
                                            if (!$r9) {
                                                echo "Something went wrong";
                                            } else if ($r9 & ($data['type10'] == '')) {
                                                echo "9 rows inserted";
                                            } else if ($r9 & ($data['type10'] != '')) {
                                                $dataset10 = array(
                                                    "grn" => $data["grn_no"],
                                                    "po_no" => $data["po_no"],
                                                    "date" => $data["date"],
                                                    "supplier" => $data["name"],
                                                    "pro_id" => $data["product10"],
                                                    "unit_price" => $data["unit10"],
                                                    "quantity" => $data["stock10"],
                                                    "price" => $data["tstock10"],
                                                    "description" => $data["des10"]
                                                );
                                                $r10 = $this->db->insert('stock', $dataset10);
                                                if (!$r10) {
                                                    echo "Something went wrong";
                                                } else if ($r10 & ($data['type11'] == '')) {
                                                    echo "10 rows inserted";
                                                } else if ($r10 & ($data['type11'] != '')) {
                                                    $dataset11 = array(
                                                        "grn" => $data["grn_no"],
                                                        "po_no" => $data["po_no"],
                                                        "date" => $data["date"],
                                                        "supplier" => $data["name"],
                                                        "pro_id" => $data["product11"],
                                                        "unit_price" => $data["unit11"],
                                                        "quantity" => $data["stock11"],
                                                        "price" => $data["tstock11"],
                                                        "description" => $data["des11"]
                                                    );
                                                    $r11 = $this->db->insert('stock', $dataset11);
                                                    if (!$r11) {
                                                        echo "Something went wrong";
                                                    } else if ($r11 & ($data['type12'] == '')) {
                                                        echo "11 rows inserted";
                                                    } else if ($r11 & ($data['type12'] != '')) {
                                                        $dataset12 = array(
                                                            "grn" => $data["grn_no"],
                                                            "po_no" => $data["po_no"],
                                                            "date" => $data["date"],
                                                            "supplier" => $data["name"],
                                                            "pro_id" => $data["product12"],
                                                            "unit_price" => $data["unit12"],
                                                            "quantity" => $data["stock12"],
                                                            "price" => $data["tstock12"],
                                                            "description" => $data["des12"]
                                                        );
                                                        $r12 = $this->db->insert('stock', $dataset12);
                                                        if (!$r12) {
                                                            echo "Something went wrong";
                                                        } else if ($r12 & ($data['type13'] == '')) {
                                                            echo "12 rows inserted";
                                                        } else if ($r12 & ($data['type13'] != '')) {
                                                            $dataset13 = array(
                                                                "grn" => $data["grn_no"],
                                                                "po_no" => $data["po_no"],
                                                                "date" => $data["date"],
                                                                "supplier" => $data["name"],
                                                                "pro_id" => $data["product13"],
                                                                "unit_price" => $data["unit13"],
                                                                "quantity" => $data["stock13"],
                                                                "price" => $data["tstock13"],
                                                                "description" => $data["des13"]
                                                            );
                                                            $r13 = $this->db->insert('stock', $dataset13);
                                                            if (!$r13) {
                                                                echo "Something went wrong";
                                                            } else if ($r13 & ($data['type14'] == '')) {
                                                                echo "13 rows inserted";
                                                            } else if ($r13 & ($data['type14'] != '')) {
                                                                $dataset14 = array(
                                                                    "grn" => $data["grn_no"],
                                                                    "po_no" => $data["po_no"],
                                                                    "date" => $data["date"],
                                                                    "supplier" => $data["name"],
                                                                    "pro_id" => $data["product14"],
                                                                    "unit_price" => $data["unit14"],
                                                                    "quantity" => $data["stock14"],
                                                                    "price" => $data["tstock14"],
                                                                    "description" => $data["des14"]
                                                                );
                                                                $r14 = $this->db->insert('stock', $dataset14);
                                                                if (!$r14) {
                                                                    echo "Something went wrong";
                                                                } else if ($r14 & ($data['type15'] == '')) {
                                                                    echo "14 rows inserted";
                                                                } else if ($r14 & ($data['type15'] != '')) {
                                                                    $dataset15 = array(
                                                                        "grn" => $data["grn_no"],
                                                                        "po_no" => $data["po_no"],
                                                                        "date" => $data["date"],
                                                                        "supplier" => $data["name"],
                                                                        "pro_id" => $data["product15"],
                                                                        "unit_price" => $data["unit15"],
                                                                        "quantity" => $data["stock15"],
                                                                        "price" => $data["tstock15"],
                                                                        "description" => $data["des15"]
                                                                    );
                                                                    $r15 = $this->db->insert('stock', $dataset15);
                                                                    if (!$r15) {
                                                                        echo "Something went wrong";
                                                                    } else {
                                                                        echo "15 rows successfully added";
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            echo "Nothing to add";
        }
    }
    
    public function getStockDetails()
    {
        $query = $this->db->get_where('stock_view');
        return $query->result_array();
    }
    public function deleteStock($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->delete('stock');
        if($result){
            echo true;
        }else{
            echo false;
        }
    }

    public function getTotalStock()
    {

        $query = $this->db->query("SELECT sum(available_stock) as  total_stock from stock_view");
        return $query->result_array();
    }
    public function getAvaiStock()
    {

        $query = $this->db->query("SELECT count(available_stock) as  total_stock from stock_view where available_stock > 10");
        return $query->result_array();
    }
    public function getLowStock()
    {

        $query = $this->db->query("SELECT count(available_stock) as  total_stock from stock_view where available_stock < 10 and available_stock >0");
        return $query->result_array();
    }
    public function getOutStock()
    {

        $query = $this->db->query("SELECT count(available_stock) as  total_stock from stock_view where available_stock < 1");
        return $query->result_array();
    }
    public function getProfile()
    {
        $query = $this->db->get_where('user_view', array('id' => $this->session->userdata('Id')));
        return $query->result_array();
    }
    public function getReport()
    {
        $query = $this->db->query("SELECT t1.dep_id, t2.dep_name, t1.type_id, t1.type_name, t1.total_type_price from outbound_view t1 JOIN department t2 ON(t1.dep_id = t2.dep_id) order by t1.dep_id");
        return $query->result();
    }

    public function outboundProducts($data)
    {
        if ($data['type'] != '') {
            $dataset = array(
                "sir" => $data["sir_no"],
                "issue_no" => $data["is_no"],
                "date" => $data["date"],
                "dep_id" => $data["depart"],
                "pro_id" => $data["product"],
                "unit_price" => $data["unit"],
                "quantity" => -$data["stock"],
                "price" => -$data["tstock"]
            );
            $r = $this->db->insert('stock', $dataset);
            if (!$r) {
                echo "Something went wrong";
            } else if ($r & ($data['type2'] == '')) {
                echo "1 row inserted";
            } else if ($r & ($data['type2'] != '')) {
                $dataset2 = array(
                    "sir" => $data["sir_no"],
                    "issue_no" => $data["is_no"],
                    "date" => $data["date"],
                    "dep_id" => $data["depart2"],
                    "pro_id" => $data["product2"],
                    "unit_price" => $data["unit2"],
                    "quantity" => -$data["stock2"],
                    "price" => -$data["tstock2"]
                );
                $r2 = $this->db->insert('stock', $dataset2);
                if (!$r2) {
                    echo "Something went wrong";
                } else if ($r2 & ($data['type3'] == '')) {
                    echo "2 rows inserted";
                } else if ($r2 & ($data['type3'] != '')) {
                    $dataset3 = array(
                        "sir" => $data["sir_no"],
                        "issue_no" => $data["is_no"],
                        "date" => $data["date"],
                        "dep_id" => $data["depart3"],
                        "pro_id" => $data["product3"],
                        "unit_price" => $data["unit3"],
                        "quantity" => -$data["stock3"],
                        "price" => -$data["tstock3"]
                    );
                    $r3 = $this->db->insert('stock', $dataset3);
                    if (!$r3) {
                        echo "Something went wrong";
                    } else if ($r3 & ($data['type4'] == '')) {
                        echo "3 rows inserted";
                    } else if ($r3 & ($data['type4'] != '')) {
                        $dataset4 = array(
                            "sir" => $data["sir_no"],
                            "issue_no" => $data["is_no"],
                            "date" => $data["date"],
                            "dep_id" => $data["depart4"],
                            "pro_id" => $data["product4"],
                            "unit_price" => $data["unit4"],
                            "quantity" => -$data["stock4"],
                            "price" => -$data["tstock4"]
                        );
                        $r4 = $this->db->insert('stock', $dataset4);
                        if (!$r4) {
                            echo "Something went wrong";
                        } else if ($r4 & ($data['type5'] == '')) {
                            echo "4 rows inserted";
                        } else if ($r4 & ($data['type5'] != '')) {
                            $dataset5 = array(
                                "sir" => $data["sir_no"],
                                "issue_no" => $data["is_no"],
                                "date" => $data["date"],
                                "dep_id" => $data["depart5"],
                                "pro_id" => $data["product5"],
                                "unit_price" => $data["unit5"],
                                "quantity" => -$data["stock5"],
                                "price" => -$data["tstock5"]
                            );
                            $r5 = $this->db->insert('stock', $dataset5);
                            if (!$r5) {
                                echo "Something went wrong";
                            } else if ($r5 & ($data['type6'] == '')) {
                                echo "5 rows inserted";
                            } else if ($r5 & ($data['type6'] != '')) {
                                $dataset6 = array(
                                    "sir" => $data["sir_no"],
                                    "issue_no" => $data["is_no"],
                                    "date" => $data["date"],
                                    "dep_id" => $data["depart6"],
                                    "pro_id" => $data["product6"],
                                    "unit_price" => $data["unit6"],
                                    "quantity" => -$data["stock6"],
                                    "price" => -$data["tstock6"]
                                );
                                $r6 = $this->db->insert('stock', $dataset6);
                                if (!$r6) {
                                    echo "Something went wrong";
                                } else if ($r6 & ($data['type7'] == '')) {
                                    echo "6 rows inserted";
                                } else if ($r6 & ($data['type7'] != '')) {
                                    $dataset7 = array(
                                        "sir" => $data["sir_no"],
                                        "issue_no" => $data["is_no"],
                                        "date" => $data["date"],
                                        "dep_id" => $data["depart7"],
                                        "pro_id" => $data["product7"],
                                        "unit_price" => $data["unit7"],
                                        "quantity" => -$data["stock7"],
                                        "price" => -$data["tstock7"]
                                    );
                                    $r7 = $this->db->insert('stock', $dataset7);
                                    if (!$r7) {
                                        echo "Something went wrong";
                                    } else if ($r7 & ($data['type8'] == '')) {
                                        echo "7 rows inserted";
                                    } else if ($r7 & ($data['type8'] != '')) {
                                        $dataset8 = array(
                                            "sir" => $data["sir_no"],
                                            "issue_no" => $data["is_no"],
                                            "date" => $data["date"],
                                            "dep_id" => $data["depart8"],
                                            "pro_id" => $data["product8"],
                                            "unit_price" => $data["unit8"],
                                            "quantity" => -$data["stock8"],
                                            "price" => -$data["tstock8"]
                                        );
                                        $r8 = $this->db->insert('stock', $dataset8);
                                        if (!$r8) {
                                            echo "Something went wrong";
                                        } else if ($r8 & ($data['type9'] == '')) {
                                            echo "8 rows inserted";
                                        } else if ($r8 & ($data['type9'] != '')) {
                                            $dataset9 = array(
                                                "sir" => $data["sir_no"],
                                                "issue_no" => $data["is_no"],
                                                "date" => $data["date"],
                                                "dep_id" => $data["depart9"],
                                                "pro_id" => $data["product9"],
                                                "unit_price" => $data["unit9"],
                                                "quantity" => -$data["stock9"],
                                                "price" => -$data["tstock9"]
                                            );
                                            $r9 = $this->db->insert('stock', $dataset9);
                                            if (!$r9) {
                                                echo "Something went wrong";
                                            } else if ($r9 & ($data['type10'] == '')) {
                                                echo "9 rows inserted";
                                            } else if ($r9 & ($data['type10'] != '')) {
                                                $dataset10 = array(
                                                    "sir" => $data["sir_no"],
                                                    "issue_no" => $data["is_no"],
                                                    "date" => $data["date"],
                                                    "dep_id" => $data["depart10"],
                                                    "pro_id" => $data["product10"],
                                                    "unit_price" => $data["unit10"],
                                                    "quantity" => -$data["stock10"],
                                                    "price" => -$data["tstock10"]
                                                );
                                                $r10 = $this->db->insert('stock', $dataset10);
                                                if (!$r10) {
                                                    echo "Something went wrong";
                                                } else if ($r10 & ($data['type11'] == '')) {
                                                    echo "10 rows inserted";
                                                } else if ($r10 & ($data['type11'] != '')) {
                                                    $dataset11 = array(
                                                        "sir" => $data["sir_no"],
                                                        "issue_no" => $data["is_no"],
                                                        "date" => $data["date"],
                                                        "dep_id" => $data["depart11"],
                                                        "pro_id" => $data["product11"],
                                                        "unit_price" => $data["unit11"],
                                                        "quantity" => -$data["stock11"],
                                                        "price" => -$data["tstock11"]
                                                    );
                                                    $r11 = $this->db->insert('stock', $dataset11);
                                                    if (!$r11) {
                                                        echo "Something went wrong";
                                                    } else if ($r11 & ($data['type12'] == '')) {
                                                        echo "11 rows inserted";
                                                    } else if ($r11 & ($data['type12'] != '')) {
                                                        $dataset12 = array(
                                                            "sir" => $data["sir_no"],
                                                            "issue_no" => $data["is_no"],
                                                            "date" => $data["date"],
                                                            "dep_id" => $data["depart12"],
                                                            "pro_id" => $data["product12"],
                                                            "unit_price" => $data["unit12"],
                                                            "quantity" => -$data["stock12"],
                                                            "price" => -$data["tstock12"]
                                                        );
                                                        $r12 = $this->db->insert('stock', $dataset12);
                                                        if (!$r12) {
                                                            echo "Something went wrong";
                                                        } else if ($r12 & ($data['type13'] == '')) {
                                                            echo "12 rows inserted";
                                                        } else if ($r12 & ($data['type13'] != '')) {
                                                            $dataset13 = array(
                                                                "sir" => $data["sir_no"],
                                                                "issue_no" => $data["is_no"],
                                                                "date" => $data["date"],
                                                                "dep_id" => $data["depart13"],
                                                                "pro_id" => $data["product13"],
                                                                "unit_price" => $data["unit13"],
                                                                "quantity" => -$data["stock13"],
                                                                "price" => -$data["tstock13"]
                                                            );
                                                            $r13 = $this->db->insert('stock', $dataset13);
                                                            if (!$r13) {
                                                                echo "Something went wrong";
                                                            } else if ($r13 & ($data['type14'] == '')) {
                                                                echo "13 rows inserted";
                                                            } else if ($r13 & ($data['type14'] != '')) {
                                                                $dataset14 = array(
                                                                    "sir" => $data["sir_no"],
                                                                    "issue_no" => $data["is_no"],
                                                                    "date" => $data["date"],
                                                                    "dep_id" => $data["depart14"],
                                                                    "pro_id" => $data["product14"],
                                                                    "unit_price" => $data["unit14"],
                                                                    "quantity" => -$data["stock14"],
                                                                    "price" => -$data["tstock14"]
                                                                );
                                                                $r14 = $this->db->insert('stock', $dataset14);
                                                                if (!$r14) {
                                                                    echo "Something went wrong";
                                                                } else if ($r14 & ($data['type15'] == '')) {
                                                                    echo "14 rows inserted";
                                                                } else if ($r14 & ($data['type15'] != '')) {
                                                                    $dataset15 = array(
                                                                        "sir" => $data["sir_no"],
                                                                        "issue_no" => $data["is_no"],
                                                                        "date" => $data["date"],
                                                                        "dep_id" => $data["depart15"],
                                                                        "pro_id" => $data["product15"],
                                                                        "unit_price" => $data["unit15"],
                                                                        "quantity" => -$data["stock15"],
                                                                        "price" => -$data["tstock15"]
                                                                    );
                                                                    $r15 = $this->db->insert('stock', $dataset15);
                                                                    if (!$r15) {
                                                                        echo "Something went wrong";
                                                                    } else {
                                                                        echo "15 rows successfully added";
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        } else {
            echo "Nothing to add";
        }
    }
}
