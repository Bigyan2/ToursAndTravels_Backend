class review{
    function approveFeedback($id){
        $query = "Update Feedback set Status='Approved' where FeedbackId=".$id;
    }

    function insertRatings(){
        $query = "Insert into Ratings() Values()";
    }

    function insertFeedback($feedback){
        $query = "Insert into Feedback() Values()";
    }
}
