<?php
class ATMTransactions {
    public function performTransaction($account, $amount, $type) {
        if ($type === 'withdraw') {
            return $account->withdraw($amount);
        } elseif ($type === 'deposit') {
            return $account->deposit($amount);
        }
        return false;
    }
}
?>
