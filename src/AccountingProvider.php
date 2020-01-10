<?php
namespace Dvb\Accounting;

interface AccountingProvider {
    public function getRelations(): array;
    public function getLedgers(): array;
    public function getMutations(MutationFilter $filter = null): array;
    public function addInvoice(array $invoice): string;
    public function addRelation(AccountingRelation $relation): AccountingRelation;
    public function updateRelation(AccountingRelation $relation): AccountingRelation;
}
